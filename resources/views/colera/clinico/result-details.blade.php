<div class="result-form">
<button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:100%">
Clique para ver detalhes do paciente
</button>

<!-- Modal -->
<div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="instruction">
        <div class="row">
            <div class="col-lg-1 d-flex flex-row justify-content-end">
            <img src="assets/img/instrucao.png"  alt="" width="50" height="50">
            </div>
        </div>
    </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col">
                Criança?
                </div>
                <div class="col">
                <strong class="badge bg-secondary" style="height:25px;width:100%;text-align:left">@if($is_child ==1) SIM  @else NAO @endif</strong>
                </div>
            </div>
            <div class="row">
                <div class="col">
                Grávida
                </div>
                <div class="col">
                <strong class="badge bg-secondary" style="height:25px;width:100%;text-align:left">@if($has_pregnant ==1) SIM  @else NAO @endif</strong>
                </div>
            </div>
            @foreach($all_filled_data as $detail)
                <div class="row">
                    <div class="col">
                        {{$detail['label']}}:
                    </div>
                    <div class="col">
                    <strong class="badge bg-secondary" style="height:25px;width:100%;text-align:left">{{$detail['value']}}</strong>
                    </div>
                </div>
            @endforeach
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</div>


