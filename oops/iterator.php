<?php
include_once "vendor/autoload.php";
class TrendingRepositoriesIterator implements Iterator
{
    private $repos = [];
    private $pointer = 0;
    public function __construct()
    {
        $this->populate();
    }
    public function rewind()
    {
        $this->pointer = 0;
    }
    public function valid()
    {
        return isset($this->repos[$this->pointer]);
    }
    public function next()
    {
        $this->pointer++;
    }
    public function key()
    {
        return $this->pointer;
    }
    public function current()
    {
        return $this->repos[$this->pointer];
    }
    private function populate()
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://api.github.com/search/repositories', [ 'query' => ['q' => 'language:php', 'sort' => 'stars', 'order' => 'desc']]);
        $resInArray = json_decode($res->getBody(), true);
        $trendingRepos = array_slice($resInArray['items'], 0, 10);
        foreach ($trendingRepos as $rep) {
            $this->repos[] = $rep['name'];
        }
    }
}

$trendingRepositoriesIterator = new TrendingRepositoriesIterator();
 
foreach ($trendingRepositoriesIterator as $repository) {
    echo $repository . "\n";
}