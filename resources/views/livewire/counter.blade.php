<div class="main-content" style="padding-left: 30px;">
    <section class="section">
        <div class="section-header">
            <h6>Belajar Berhitung Mas</h6>
        </div>

        <div class="card card-body" style="display: inherit; text-align: center">
            <h1>{{ $count }}</h1>

            <button class="btn btn-sm btn-success" wire:click="increment">+</button>

            <button class="btn btn-sm btn-danger" wire:click="decrement">-</button>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Cari di sini Mas</h4>
                            <div class="card-header-form">
                                <div class="input-group">
                                    <input type="text" wire:model="search"
                                        class="form-control"
                                        placeholder="Di sini di sini">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary" wire:click="search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>{{$currentTotalRows}} dari {{ $totalRows }} total rows </p>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>ID</th>
                                        <th>IMEI</th>
                                        <th>Speed</th>
                                        <th>Altitude</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Accuracy</th>
                                        <th>Fix Time</th>
                                        <th>Server Time</th>
                                        <th>Device Time</th>
                                        <th>Address</th>
                                    </tr>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{$d['id']}}</td>
                                            <td>{{$d['device_id']}}</td>
                                            <td>{{$d['speed']}}</td>
                                            <td>{{$d['altitude']}}</td>
                                            <td>{{$d['latitude']}}</td>
                                            <td>{{$d['longitude']}}</td>
                                            <td>{{$d['accuracy']}}</td>
                                            <td>{{$d['fix_time']}}</td>
                                            <td>{{$d['server_time']}}</td>
                                            <td>{{$d['device_time']}}</td>
                                            <td style="overflow:hidden; white-space:nowrap; width:100px; ">{{$d['address']}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>