<!DOCTYPE html>
<html>
    <head>
        <title>BCCR--Admission form</title>
<?php require_once './partials/header.php'?>
        <section class="adm-form my-1">
            <div class="container flex-col">
                <form  method="POST" action="./thanku.php">
                    <div class="form-label">
                        <p>Student Detail</p>
                    </div>
                    <div class="sep my-1">
                        <div class="form-div">
                            <label>Student Name</label>
                            <input type="text" for="name" name="student_name">
                        </div>
                        <div class="form-div">
                            <label>Gender</label>
                            <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                        <div class="form-div">
                            <label>Age</label>
                            <input type="number"  name="age" value="18" >
                        </div>
                        <div class="form-div">
                            <label>Religion</label>
                            <input type="text" name="religion">
                        </div>
                        <div class="form-div">
                            <label>Caste</label>
                            <input type="text" name="caste">
                        </div>
                        <div class="form-div">
                            <label>DOB</label>
                            <input type="date" name="dob">
                        </div>
                        <div class="form-div">
                            <label>Contact No</label>
                            <input type="tel" name="contact">
                        </div>
                        <div class="form-div">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-div">
                            <label>Course</label>
                            <input type="text" name="course">
                        </div>
                    </div>
                    <div class="form-label my-1">
                        <p>Family Detail</p>
                    </div>
                    <div class="sep my-1">
                        <div class="form-div">
                            <label>Father's Name</label>
                            <input type="text" name="fathers_name">
                        </div>
                        <div class="form-div">
                            <label>Mother's Name</label>
                            <input type="text" name="mothers_name">
                        </div>
                        <div class="form-div">
                            <label>Guardian's Name</label>
                            <input type="text" name="guardian">
                        </div>
                        <div class="district">
                            <label>Father's Occupation</label>
                            <input type="text" name="f_occupation" >
                        </div>
                        <div class="form-div">
                            <label>Mother's Occupation</label>
                            <input type="tel" name="m_occupation">
                        </div>
                    </div>
                    <div class="form-label my-1">
                        <p>Address Detail</p>
                    </div>
                    <div class="sep my-1">
                        <div class="form-div">
                            <label>Nationality</label>
                            <select name="nationality">
                                <option value="indian">Indian</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-div">
                            <label>State</label>
                            <input type="text" name="state">
                        </div>
                        <div class="form-div">
                            <label>City</label>
                            <input type="text" name="city">
                        </div>
                        <div class="district">
                            <label>District</label>
                            <input type="text" name="district" >
                        </div>
                        <div class="form-div">
                            <label>Pincode</label>
                            <input type="tel" name="pincode">
                        </div>
                    </div>
                    <input type="hidden" name="reg" value="<?php echo rand(1000000000,1999999999)?>">
                    <div class="btn-sep my-1">
                        <button class="btn-primary neutral">Back</button>
                        <button class="btn-primary good" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </section>
<?php require_once './partials/footer.php'?>