@extends('app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-3">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Update Score</h5><hr>
                    <input class="form-control ScoreValue" type="text" value="">
                    <button class="btn btn-success btn-block mt-2 UpdateBtn">Update</button>
                    <h4 class="lastScore"></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $('.UpdateBtn').click(function () {
        var scoreValue = $('.ScoreValue').val();
        var url = "/pushScoreValue";
        axios.post(url,{
            score:scoreValue
        }).then(function (response) {
            $('.lastScore').html(response.data);
        }).catch(function () {

        })
    })
</script>
@endsection