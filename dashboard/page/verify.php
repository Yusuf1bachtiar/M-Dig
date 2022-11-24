<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Add Doctors</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Doctors</a>
                                </li>
                                <li class="breadcrumb-item active">Add Doctors
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Add Doctors Form Wizard -->

                <section id="add-doctors">
                    <div class="icon-tabs">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Doctors</h4>
                                        <a href="#" class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form action="#" class="add-doctors-tabs icons-tab-steps steps-validation wizard-notification wizard clearfix" role="application" id="steps-uid-0" novalidate="novalidate"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="step"><i class="step-icon la la-user font-medium-3"></i></span>  Personal Details</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="step"><i class="step-icon la la-book font-medium-3"></i></span>  Education Details</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="step"><i class="step-icon font-medium-3 la la-building"></i></span>  Previous Experience Details</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="step"><i class="step-icon ft-monitor font-medium-3"></i></span>  Social Media</a></li></ul></div><div class="content clearfix">

                                                <!-- step 1 => Personal Details -->

                                                <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current"><i class="step-icon la la-user font-medium-3"></i> Personal Details</h6>
                                                <fieldset id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName">First Name:<span class="danger">*</span></label>
                                                                <input type="text" class="form-control required" id="firstName" name="firstname">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastName">Last Name:<span class="danger">*</span></label>
                                                                <input type="text" class="form-control required" id="lastName" name="lastname">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address">Address:</label>
                                                                <input type="text" class="form-control" id="address">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="city">City:</label>
                                                                <select id="city" class="custom-select">
                                                                    <option value="">Select City</option>
                                                                    <option value="manhattan">Manhattan</option>
                                                                    <option value="seattle">Seattle</option>
                                                                    <option value="kingsville">Kingsville</option>
                                                                    <option value="losangeles">Los Angeles</option>
                                                                    <option value="florida">Florida</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="state">State:</label>
                                                                <select id="state" class="custom-select">
                                                                    <option value="">Select State</option>
                                                                    <option value="washingtondc">Washington DC</option>
                                                                    <option value="newyork">New York</option>
                                                                    <option value="texas">Texas</option>
                                                                    <option value="california">California</option>
                                                                    <option value="miami">Miami</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="contact">Contact Number:<span class="danger">*</span></label>
                                                                <input type="number" class="form-control required" id="contact" name="contact">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="dob">Date Of Birth:<span class="danger">*</span></label>
                                                                <input type="date" class="form-control required" id="dob" name="dateofbirth">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <!-- Step 2 => Education Details-->

                                                <h6 id="steps-uid-0-h-1" tabindex="-1" class="title"><i class="step-icon la la-book font-medium-3"></i> Education Details</h6>
                                                <fieldset id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="school">School Attended:</label>
                                                                <input type="text" class="form-control" id="school">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="degree">Degree Held:<span class="danger">*</span></label>
                                                                <input type="text" class="form-control required" id="degree" name="degree">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="license">License:<span class="danger">*</span></label>
                                                                <input type="text" class="form-control required" id="license" name="license">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="hons">Hons &amp; Awards:</label>
                                                                <input type="text" class="form-control" id="hons">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="experties">Area Of Experties:<span class="danger">*</span></label>
                                                                <input type="text" class="form-control required" id="experties" name="expert">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="research">Research Topic</label>
                                                            <textarea id="research" cols="5" rows="1" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <!-- Step 3 => Experience -->

                                                <h6 id="steps-uid-0-h-2" tabindex="-1" class="title"><i class="step-icon font-medium-3 la la-building"></i> Previous Experience Details</h6>
                                                <fieldset id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="previousCompany">Previous Company:</label>
                                                                <input type="text" class="form-control" id="previousCompany">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="previousJobTitle">Previous Title:</label>
                                                                <input type="text" class="form-control" id="previousJobTitle">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="training">Trained By: <span class="danger">*</span></label>
                                                                <input type="text" class="form-control" id="training" name="training" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="internship">Internship:</label>
                                                                <input type="text" class="form-control" id="internship">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <!-- Step 4 => Social Media -->

                                                <h6 id="steps-uid-0-h-3" tabindex="-1" class="title"><i class="step-icon ft-monitor font-medium-3"></i> Social Media</h6>
                                                <fieldset id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="email">Email: <span class="danger">*</span></label>
                                                                <input type="email" class="form-control required" id="email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="fb">Facebook:</label>
                                                                <input type="url" class="form-control" id="fb">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="ig">Instagram:</label>
                                                                <input type="url" class="form-control" id="ig">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                            </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Submit</a></li></ul></div></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>