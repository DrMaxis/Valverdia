<!--/-/-/-/-/-/-/-/-/  
    Begin Product Main Description 
    -/-/-/-/-/-/-/-/-/-/-->
<div class="thumnail-desc pb-50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="main-thumb-desc text-center list-inline">
                        <li class="active"><a data-toggle="tab" href="#detail">Details</a></li>
                        <li><a data-toggle="tab" href="#review">Reviews (0)</a></li>
                    </ul>
                    <!--/-/-/-/-/-/-/-/-/ 
                         Begin Tab Content
                    -/-/-/-/-/-/-/-/-/-/-->
                    <div class="tab-content thumb-content">
                        <div id="detail" class="tab-pane fade in active pb-40">
                            <p class="mb-10">{{$product->description}}</p>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <!--/-/-/-/-/-/-/-/-/  
                                Begin Reviews  
                            -/-/-/-/-/-/-/-/-/-/-->
                            <div class="review">
                                <p class="mb-10">There are no reviews for this product.</p>
                                <h2>WRITE A REVIEW</h2>
                            </div>
                            <!--/-/-/-/-/-/-/-/-/  
                                End Reviews End 
                                -/-/-/-/-/-/-/-/-/-/-->

                            <!--/-/-/-/-/-/-/-/-/  
                                Begin Reviews Field 
                                -/-/-/-/-/-/-/-/-/-/-->
                            <div class="riview-field mt-30">
                                <form autocomplete="off" action="#">
                                    <div class="form-group">
                                        <label class="req" for="sure-name">name</label>
                                        <input type="text" class="form-control" id="sure-name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="req" for="comments">your Review</label>
                                        <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                        <div class="help-block">
                                            <span class="text-danger">Note:</span> HTML is not translated!
                                        </div>
                                    </div>
                                    <div class="form-group required radio-label">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label class="control-label req">Rating</label> &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                <input type="radio" name="rating" value="1"> &nbsp;
                                                <input type="radio" name="rating" value="2"> &nbsp;
                                                <input type="radio" name="rating" value="3"> &nbsp;
                                                <input type="radio" name="rating" value="4"> &nbsp;
                                                <input type="radio" name="rating" value="5"> &nbsp;Good
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" id="button-review">Continue</button>
                                    </div>
                                </form>
                            </div>
                            <!--/-/-/-/-/-/-/-/-/  
                                Begin Reviews Field 
                            -/-/-/-/-/-/-/-/-/-/-->
                        </div>
                    </div>
                    <!--/-/-/-/-/-/-/-/-/  
                        End Tab Content
                    -/-/-/-/-/-/-/-/-/-/-->
                </div>
            </div>
            <!--/-/-/-/-/-/-/-/-/  
                End Row 
            -/-/-/-/-/-/-/-/-/-/-->
        </div>
        <!--/-/-/-/-/-/-/-/-/  
            End Container  
        -/-/-/-/-/-/-/-/-/-/-->
    </div>
    <!--/-/-/-/-/-/-/-/-/  
         End Product Main Description 
    -/-/-/-/-/-/-/-/-/-/-->