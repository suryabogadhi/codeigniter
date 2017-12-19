<?php 
	$this->load->view('header_page');
?>	
	<div class="container">
		<div class="mquiz-space-20"></div>
			<div class="mquiz-space-30"></div>
			<div class="col-md-offset-4 col-md-4 top-space">
				<div class="mquiz-color">
					<h2 class="text-center head-color-white">Recharge here</h2>
					<div class="mquiz-space-30"></div>
					<form role="form" class="form-horizontal" method="post" action="">
                    <div class="form-group">
                      <div class="col-sm-12">
                            <input type="text" name="mobile" class="form-control" id="inputEmail3" placeholder="Mobile Number">
                            <span class="help-block red"><?php echo form_error('name')?></span>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                           	<select class="form-control">
                           		<option>-- select state --</option>
							  	<option value="">Andhra Pradesh</option>
                                <option value="">Arunachal Pradesh</option>
                                <option value="">Assam</option>
                                <option value="">Bihar</option>
                                <option value="">Chhattisgarh</option>
                                <option value="">Goa</option>
                                <option value="">Gujarat</option>
                                <option value="">Haryana</option>
                                <option value="">Himachal Pradesh</option>
                                <option value="">Jammu and Kashmir</option>
                                <option value="">Jharkhand</option>
                                <option value="">Karnataka</option>
                                <option value="">Kerala</option>
                                <option value="">Madhya Pradesh</option>
                                <option value="">Maharashtra</option>
                                <option value="">Manipur</option>
                                <option value="">Meghalaya</option>
                                <option value="">Mizoram</option>
                                <option value="">Nagaland</option>
                                <option value="">Odisha</option>
                                <option value="">Punjab</option>
                                <option value="">Rajasthan</option>
                                <option value="">Sikkim</option>
                                <option value="">Tamil Nadu</option>
                                <option value="">Tripura</option>
                                <option value="">Uttar Pradesh</option>
                                <option value="">Uttarakhand</option>
                                <option value="">West Bengal</option>
							              </select>
                           <span class="help-block red"><?php echo form_error('email')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control">
                            	<option>-- select provider --</option>
							  	<option value="">Airtel</option>
							  	<option value="">Vodafone</option>
                                <option value="">Idea</option>
                                <option value="">Tata Docomo GSM</option>
                                <option value="">Reliance GSM</option>
                                <option value="">Aircel</option>
                                <option value="">BSNL</option>
                                <option value="">Telenor</option>
                                <option value="">Reliance CDMA</option>
                                <option value="">MTNL Delhi</option>
                                <option value="">Tata Indicaom</option>
                                <option value="">MTS</option>
                                <option value="">Videocon Mobile</option>
                                <option value="">Virgin GSM</option>
                                <option value="">Virgin CDMA</option>
                                <option value="">Tatadocomo CDMA</option>
                                <option value="">T24</option>
                                <option value="">MTNL Mumbai</option>
							</select>
                            <span class="help-block red"><?php echo form_error('phonenumber')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                           	<select class="form-control">
							  	<option>-- select amount --</option>
							  	<option>10</option>
							  	<option>20</option>
							  	<option>30</option>
							  	<option>40</option>
							  	<option>50</option>
							</select>
                           <span class="help-block red"><?php echo form_error('message')?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                           	<button type="submit" class="btn btn-mquiz">Recharge Now</button>
                        </div>
                        <div class="col-sm-6">
                           	<button type="submit" class="btn btn-mquiz">Recharge History</button>
                        </div>
                    </div>
                    <div class="mquiz-space-50"></div>
                </form>
				</div>
				<div class="mquiz-space-20"></div>
			</div>
	</div> 	
<?php
	$this->load->view('footer_page');
?>