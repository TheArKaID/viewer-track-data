<?php
 
namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;
use ClickHouseDB\Client;
use Livewire\Attributes\Url;

class Counter extends Component
{
    public $count = 1;
    #[Url]
    public $search = '';
    public $data = [];
    public $totalRows = 0;
    public $currentTotalRows = 0;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        $this->search();
        Log::info(json_encode($this->data));
        return view('livewire.counter');
    }

    public function search()
    {
        $db = new Client(config('clickhouse.connection'));
        $st = $db->database('default')->select('SELECT * FROM positions WHERE device_id LIKE :search LIMIT 10', ['search' => '%' . $this->search . '%']);
        $this->data = $st->rows();
        $this->totalRows = $st->countAll();
        $this->currentTotalRows = count($this->data);
    }
}