<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Designation Detail</h4>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Id :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $designation->id;?></h5>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b> Name :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $designation->name;?></h5>
                </div>
            </div>

            
            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Created :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $designation->created;?></h5>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="control-label col-xs-4"><h6><b>Modified :</b></h6></label>
                <div class="input-group col-xs-7">
                    <h5><?php echo $designation->modified;?></h5>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

    </div>
</div>







