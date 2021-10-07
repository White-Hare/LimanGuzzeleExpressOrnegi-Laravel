<div class="row">
    <div class="col-12 mb-2">
        <table id="users" class="table"></table>
    </div>
    <div class="col-12 mb-2">
        <form onsubmit="addName(); return false;" class="row input-group">
            <div class="col-md-4">
                <input id="nameInput" type="text" class="form-control"/>
            </div>
            <div class="col-md-4">
                <input id="surnameInput" type="text" class="form-control"/>
            </div>
            <div class="col-md-4">
                <button type="submit" id="addNameButton" class="btn btn-warning">Kullanici Ekle</button>
            </div>
        </form>
    </div>
</div>

@include("guzzleTest.scripts")