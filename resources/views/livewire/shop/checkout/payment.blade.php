<div class="form-group">
    <label class="form-label">CardHolder Name</label>
    <input type="text" class="form-control" id="name1" placeholder="First Name">
</div>
<div class="form-group">
    <label class="form-label">Card number</label>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-append">
													<button class="btn btn-info" type="button"><i
                                                            class="fab fa-cc-visa"></i> &nbsp; <i
                                                            class="fab fa-cc-amex"></i> &nbsp;
													<i class="fab fa-cc-mastercard"></i></button>
												</span>
    </div>
</div>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group mb-sm-0">
            <label class="form-label">Expiration</label>
            <div class="input-group">
                <input type="number" class="form-control" placeholder="MM" name="expiremonth">
                <input type="number" class="form-control" placeholder="YY" name="expireyear">
            </div>
        </div>
    </div>
    <div class="col-sm-4 ">
        <div class="form-group mb-0">
            <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
            <input type="number" class="form-control" required="">
        </div>
    </div>
</div>
