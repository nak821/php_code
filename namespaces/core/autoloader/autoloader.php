<?php
namespace core\autoloader;
echo "Autoloader folder<br />";
class AutoLoader {

  const UNABLE_TO_LOAD = 'Unable to load class';
  protected static $directories = array(); #directories
  protected static $number_of_loaded_classes = 0;

  public function __construct(array $directories = array()) {
    self::init($directories);
  }

  public static function add_directories($directories) {
    if (is_array($directories)) {
      self::$directories = array_merge(self::$directories, $directories);
    } else {
      self::$directories[] = $directories;
    }
  }

  public static function init($directories = array()) {
    if ($directories) {
      self::add_directories($directories);
    }
    if (self::$number_of_loaded_classes == 0) {
      spl_autoload_register(__CLASS__ . '::classes_autoload');
      self::$number_of_loaded_classes++;
    }
  }

  public static function classes_autoload($class_name) {
    $success = FALSE;
    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, strtolower($class_name)) . '.class.php';
    foreach (self::$directories as $directorie) {
      $classes_folder_path = $directorie . DIRECTORY_SEPARATOR . $class_name;
      if (self::require_classes_directory($classes_folder_path)) {
        $success = TRUE;
        break;
      }
    } // End of foreach loop
    if (!$success) {
      if (!self::require_classes_directory(__DIR__ . DIRECTORY_SEPARATOR . $class_name)) {
        throw new \Exception(self::UNABLE_TO_LOAD . ' ' . $class_name);
      }
    }
    return $success;
  }

  protected static function require_classes_directory($classes_directory_path) {
    if (file_exists($classes_directory_path)) {
      require_once $classes_directory_path;
      return TRUE;
    }
    return FALSE;
  }

}

