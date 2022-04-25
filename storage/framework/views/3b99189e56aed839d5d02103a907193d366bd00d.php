<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('RegisterLogin.Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('RegisterLogin.FirstName')); ?></label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fname" value="<?php echo e(old('fname')); ?>"  autocomplete="fname" autofocus>

                                <?php if ($errors->has('fname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fname'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('RegisterLogin.LastName')); ?> </label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control <?php if ($errors->has('lname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lname'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lname" value="<?php echo e(old('lname')); ?>"  autocomplete="lname" autofocus>

                                <?php if ($errors->has('lname')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lname'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="employer" class="col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.Employer')); ?></label>
                            
                            <div class="col-md-6">
  <select id="employer"  class="form-control <?php if ($errors->has('employer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('employer'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="employer" value="<?php echo e(old('employer')); ?>" required autocomplete="employer" autofocus required>
          <option value=" "> <?php echo e(__('RegisterLogin.Select')); ?></option>
          <option value="MOH - ASEER" <?php if(old('employer') == 'MOH - ASEER'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHASEER')); ?></option>                
          <option value="MOH - BISHA" <?php if(old('employer') == 'MOH - BISHA'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHBISHA')); ?></option>        
          <option value="MOH - EASTREN REGION" <?php if(old('employer') == 'MOH - EASTREN REGION'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHEASTRENREGION')); ?></option>        
          <option value="MOH - HAFR ALBATEN" <?php if(old('employer') == 'MOH - HAFR ALBATEN'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHHAFRALBATEN')); ?></option>        
          <option value="MOH - HAIL" <?php if(old('employer') == 'MOH - HAIL'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHHAIL')); ?></option>        
          <option value="MOH - HASA" <?php if(old('employer') == 'MOH - HASA'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHHASA')); ?></option>        
          <option value="MOH - JAZAN" <?php if(old('employer') == 'MOH - JAZAN'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHJAZAN')); ?></option>        
          <option value="MOH - JEDDAH" <?php if(old('employer') == 'MOH - JEDDAH'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHJEDDAH')); ?></option>        
          <option value="MOH - MADINAH" <?php if(old('employer') == 'MOH - MADINAH'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHMADINAH')); ?></option>        
          <option value="MOH - MAKKAH" <?php if(old('employer') == 'MOH - MAKKAH'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHMAKKAH')); ?></option>        
          <option value="MOH - NORTHERN" <?php if(old('employer') == 'MOH - NORTHERN'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHNORTHERN')); ?></option>        
          <option value="MOH - QASSIM" <?php if(old('employer') == 'MOH - QASSIM'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHQASSIM')); ?></option>        
          <option value="MOH - RIYADH" <?php if(old('employer') == 'MOH - RIYADH'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHRIYADH')); ?></option>  
          <option value="MOH - TABUK" <?php if(old('employer') == 'MOH - TABUK'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHTABUK')); ?></option>  
          <option value="MOH - TAIF" <?php if(old('employer') == 'MOH - TAIF'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MOHTAIF')); ?></option>                
     </select>



                              
                                <?php if ($errors->has('employer')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('employer'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                          <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.SelectYourAge')); ?>

                        </label>

                            <div class="col-md-6">
                                <select id="age"  class="form-control <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="age" value="<?php echo e(old('age')); ?>" required autocomplete="age" autofocus required>
          <option value=" "> <?php echo e(__('RegisterLogin.SelectAge')); ?></option>
          <option value="20 - 25" <?php if(old('age') == '20 - 25'): ?> selected="selected" <?php endif; ?>>20 - 25</option>
          <option value="25 - 30" <?php if(old('age') == '25 - 30'): ?> selected="selected" <?php endif; ?>>25 - 30</option>
          <option value="30 - 35" <?php if(old('age') == '30 - 35'): ?> selected="selected" <?php endif; ?>>30 - 35</option>
          <option value="35 - 40" <?php if(old('age') == '35 - 40'): ?> selected="selected" <?php endif; ?>>35 - 40</option>
         <option value="40 - 45"  <?php if(old('age') == '40 - 45'): ?> selected="selected" <?php endif; ?>>40 - 45</option>        
        <option value="45 - 50"  <?php if(old('age') == '45 - 50'): ?> selected="selected" <?php endif; ?>>45 - 50</option>        
          <option value="50 - 55"  <?php if(old('age') == '50 - 55'): ?> selected="selected" <?php endif; ?>>50 - 55</option>        
         <option value="55 - 60"  <?php if(old('age') == '55 - 60'): ?> selected="selected" <?php endif; ?>>55 - 60</option>          
     </select>

                                <?php if ($errors->has('age')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('age'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.SelectYourGender')); ?></label>

                            <div class="col-md-6">   
                         
                        <div class="form-control" >
                              <div class="form-check-inline">
                              <label class="form-check-label" for="male">
                                <input type="radio" <?php if(old('gender') == 'male'): ?> checked="checked" <?php endif; ?> id="male" name="gender" required  value="male"
                                class="form-check-input  <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"    autocomplete="gender" > <?php echo e(__('RegisterLogin.Male')); ?>                         
                              </label>
                          </div>
                            
                             <div class="form-check-inline">
                              <label class="form-check-label" for="female">
                                <input type="radio" <?php if(old('gender') == 'female'): ?> checked="checked" <?php endif; ?> id="female" name="gender" required 
                                class="form-check-input  <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  value="female"  autocomplete="gender"><?php echo e(__('RegisterLogin.Female')); ?> 
                              </label>
                            </div>
                      
                            </div>
                                <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="sector" class="col-md-4 col-form-label text-md-right"><?php echo e(__('RegisterLogin.Sector')); ?> </label>

                            <div class="col-md-6">
                                <select id="sector"  class="form-control <?php if ($errors->has('sector')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sector'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="sector" value="<?php echo e(old('sector')); ?>" required autocomplete="sector" autofocus required>
  <option value=" " ><?php echo e(__('RegisterLogin.Selectsector')); ?></option>
  <option value="Govenment" <?php if(old('sector') == 'Govenment'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Govenment')); ?></option>
  <option value="Semi-Govenment" <?php if(old('sector') == 'Semi-Govenment'): ?> selected="selected" <?php endif; ?>>
  <?php echo e(__('RegisterLogin.SemiGovenment')); ?></option>
 <option value="Private" <?php if(old('sector') == 'Private'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Private')); ?></option>
 <option value="Business Owner" <?php if(old('sector') == 'Business Owner'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.BusinessOwner')); ?></option>
 <option value="Freelancer" <?php if(old('sector') == 'Freelancer'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Freelancer')); ?></option>
        
                                </select>

                                <?php if ($errors->has('sector')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sector'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="education" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('RegisterLogin.Education')); ?> </label>

                            <div class="col-md-6">
                                <select id="education"  class="form-control <?php if ($errors->has('education')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('education'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="education" value="<?php echo e(old('education')); ?>" required autocomplete="education" autofocus required>
  <option value=" "><?php echo e(__('RegisterLogin.Select')); ?> </option>
  <option value="High School" <?php if(old('education') == 'High School'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.HighSchool')); ?></option>
  <option value="Diploma" <?php if(old('education') == 'Diploma'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Diploma')); ?></option>
  <option value="Bachelor Degree" <?php if(old('education') == 'Bachelor Degree'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.BachelorDegree')); ?></option>
 <option value="Master" <?php if(old('education') == 'Master'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Master')); ?></option>
 <option value="PHD" <?php if(old('education') == 'PHD'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.PHD')); ?></option>  
                                </select>

                                <?php if ($errors->has('education')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('education'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="job_level" class="col-md-4 col-form-label text-md-right"><?php echo e(__('RegisterLogin.JobLevel')); ?> </label>

                            <div class="col-md-6">
                                <select id="job_level"  class="form-control <?php if ($errors->has('job_level')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('job_level'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="job_level" value="<?php echo e(old('job_level')); ?>" required autocomplete="job_level" autofocus required>
<option value=" "><?php echo e(__('RegisterLogin.Select')); ?></option>
  <option value="Entry Level" <?php if(old('job_level') == 'Entry Level'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.EntryLevel')); ?></option>
 <option value="Intermediate" <?php if(old('job_level') == 'Intermediate'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.Intermediate')); ?></option>
  <option value="Front Line Managment" <?php if(old('job_level') == 'Front Line Managment'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.FrontLineManagment')); ?></option>
 <option value="Middle-Line Managment" <?php if(old('job_level') == 'Middle-Line Managment'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MiddleLineManagment')); ?></option>
 <option value="Senior, Excutive" <?php if(old('job_level') == 'Senior, Excutive'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.SeniorExcutive')); ?></option>
                                </select>

                                <?php if ($errors->has('job_level')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('job_level'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="purposes" class="col-md-4 col-form-label text-md-right"><?php echo e(__('RegisterLogin.PurposeforExam')); ?></label>

                            <div class="col-md-6">
                                <select id="purposes"  class="form-control <?php if ($errors->has('purposes')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('purposes'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="purposes" value="<?php echo e(old('purposes')); ?>" required autocomplete="purposes" autofocus required>
  <option value=" "><?php echo e(__('RegisterLogin.Select')); ?></option>
  <option value="Orginazation Policy" <?php if(old('purposes') == 'Orginazation Policy'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.OrginazationPolicy')); ?></option>
  <option value="New Assignment" <?php if(old('purposes') == 'New Assignment'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.NewAssignment')); ?></option>
  <option value="Meet Future Progression Requirement" <?php if(old('purposes') == 'Meet Future Progression Requirement'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.MeetFutureProgressionRequirement')); ?></option>
  <option value="Self Initiative" <?php if(old('purposes') == 'Self Initiative'): ?> selected="selected" <?php endif; ?>><?php echo e(__('RegisterLogin.SelfInitiative')); ?></option>
                                </select>

                                <?php if ($errors->has('purposes')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('purposes'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>







                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('RegisterLogin.EMailAddress')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">
                              <?php echo e(__('RegisterLogin.ConfirmEMail')); ?></label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control <?php if ($errors->has('email_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email_confirmation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email_confirmation"  required>

                         
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.ConfirmPassword')); ?> </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      <div class="form-check row">
                            <label for="TermsAggree" class="form-check-label col-md-4 col-form-label text-md-right">
                             <?php echo e(__('RegisterLogin.Iagreewithall')); ?>  <a target="_blank" href="<?php echo e(url('/terms-and-conditions')); ?>"> <?php echo e(__('RegisterLogin.termsandconditions')); ?></a></label>

                            <div class="col-md-6">
                                <input id="TermsAggree" type="checkbox" class="form-check-input  <?php if ($errors->has('TermsAggree')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('TermsAggree'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="1" name="TermsAggree" required autocomplete="TermsAggree">

                                <?php if ($errors->has('TermsAggree')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('TermsAggree'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   <?php echo e(__('RegisterLogin.Register')); ?> 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Xampp\htdocs\Mafaz\Mafaz\resources\views/auth/register.blade.php ENDPATH**/ ?>