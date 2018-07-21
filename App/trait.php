<?php
namespace App;
trait Export
{
    public function expToCSV($data)
    {
        $fh = fopen('1.csv', 'w+');
        fputcsv($fh, [$data]);
        fclose($fh);
    }
    public function expToJSON($data)
    {
        file_put_contents('1.json', json_encode($data));
    }
}
trait Export2
{
    public function expToCSV2($data)
    {
        $fh = fopen('1.csv', 'w+');
        fputcsv($fh, [$data]);
        fclose($fh);
    }
    public function expToJSON2($data)
    {
        file_put_contents('1.json', json_encode($data));
    }
}
interface Exporting
{
    public function exp($data);
}
interface Liking {
    public function like($owner);
    public function sayHi($what = null);
}
abstract class SuperMen {
    public function fly()
    {
        echo "I CAN FLY";
    }
    abstract public function superfly();
}