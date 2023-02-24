
<div class="main">
    <div class="container">
        <div class="signup-content">
            <div class="signup-img">
                <img src="images/signup-img.jpg" alt="">
            </div>
            <div class="signup-form">
                <form method="post" action="{{url("/add student/add_student")}}" class="register-form" id="register-form">
                    <h2>student registration form</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="text" name="name" id="name" required/>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <input type="text" name="address" id="address" required/>
                    </div>
                    <div class="form-radio">
                        <label for="gender" class="radio-label">Gender :</label>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="male" checked>
                            <label for="male">Male</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="gender" id="female">
                            <label for="female">Female</label>
                            <span class="check"></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="state">State :</label>
                            <div class="form-select">
                                <select name="state" id="state">
                                    <option value=""></option>
                                    <option value="us">America</option>
                                    <option value="uk">English</option>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="age">Age :</label>
                        <input type="number" name="age" id="age">
                    </div>
                    <div class="form-group">
                        <label for="pincode">Pincode :</label>
                        <input type="text" name="pincode" id="pincode">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Telephone :</label>
                        <input type="number" name="telephone" id="tel" />
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                        <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
