<?php
    function categoryForm($cNum, $cTitle, $cName, $bg = "fff"){
        echo
        '
        <div class="card mb-3" style="background:#'.$bg.'">
            <div class="card-body">
                <div class="row">
                    <h4 class="text-center">Category - '.$cNum .' '.$cTitle.'</h4>
<div class="col-5 mx-1">
    <h5>Participant 1</h5>
    <div class="mb-1">
        <label for="c'.$cNum.'_'.$cName.'_p1_Name" class="col-sm-3 col-form-label">Name</label>
<div class="col-sm-9">
    <input type="text" class="form-control" id="c'.$cNum.'_'.$cName.'_p1_Name">
</div>
</div>
<div class="mb-1">
    <label for="c'.$cNum.'_'.$cName.'_p1_class" class="col-sm-3 col-form-label">Class</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="c'.$cNum.'_'.$cName.'_p1_class">
    </div>
</div>
<div class="mb-1">
    <label for="c'.$cNum.'_'.$cName.'_p1_gender" class="col-sm-3 col-form-label">Gender</label>
    <div class="col-sm-9">
        <select class="form-select form-select" aria-label=".form-select-lg example" id="c'.$cNum.'_'.$cName.'_p1_gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
</div>
</div>
<div class="col-5 mx-1">
    <h5>Participant 2</h5>
    <div class="mb-1">
        <label for="c'.$cNum.'_'.$cName.'_p2_Name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="c'.$cNum.'_'.$cName.'_p2_Name">
        </div>
    </div>
    <div class="mb-1">
        <label for="c'.$cNum.'_'.$cName.'_p2_class" class="col-sm-3 col-form-label">Class</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="c'.$cNum.'_'.$cName.'_p2_class">
        </div>
    </div>
    <div class="mb-1">
        <label for="c'.$cNum.'_'.$cName.'_p2_gender" class="col-sm-3 col-form-label">Gender</label>
        <div class="col-sm-9">
            <select class="form-select form-select" aria-label=".form-select-lg example" id="c'.$cNum.'_'.$cName.'_p2_gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
    </div>
</div>
</div>
</div>
</div>
';

}