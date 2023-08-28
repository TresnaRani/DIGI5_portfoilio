@extends('layouts.app')

@section('home')
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ $user->name }}
                    </h1>
                    <div class="subheading mb-5">
                        <p>Bogura,Bangladesh ·<i class="fa fa-phone" aria-hidden="true"></i>
                                {{ $user->phone }}</p>
                        <a href="mailto:{{ $user->email }}"><span><i class="fa fa-envelope" aria-hidden="true"></i>
                                                                {{ $user->email }} </span></a>
                    </div>
                    <p class="lead mb-5">I'm experienced in Laravel frameworks to provide a high secure  website. I am also make a website using PHP,HTML,CSS, JavaScript and MySQL.</p>
                    <div class="social-icons">
                        <a class="social-icon linkedin" style="background-color:white;color:aqua;" href="https://www.linkedin.com/in/tresna-rani-b20b11248/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon github" style="background-color:white;color:black;" href="https://github.com/TresnaRani"><i class="fab fa-github"></i></a>
                        <!--<a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a> -->
                        <a class="social-icon facebook" style="background-color:white;color:blue;" href="https://www.facebook.com/profile.php?id=100083832080295"><i class="fab fa-facebook-f"></i></a>
                    </div>
					<br>
					<br>
                    <div class="cv">
                    <a href="{{ $user->cv_link }}" class="btn btn-success" target="_blank"download>Download my CV</a>
                  </div>
                    </div>
				
					  
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="exp mb-5">Experience</h2>
                    @foreach ( $experiences as $experience)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        
                            <h3 class="intro mb-0" style="font-family: 'Roboto', sans-serif;">{{ $experience->job_title }}</h3>
                            <div class="subheading mb-3"> <a class="social-icon2" href="#" style="text-decoration: none;" target="_blank">{{ $experience->position }}</a></div>
                            <p>{{ $experience->description }}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text"><b>DATE :</b>{{ $experience->from }} - {{ $experience->to
                        }}</span></div>
                    </div>
                    @endforeach
                  
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class=" ES mb-5">Education</h2>
                     @foreach ($educations as $education)
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class=" intro mb-0"style="font-family: 'Roboto', sans-serif;">{{ $education->institution_name
                        }}</h3>
                            <div class="intro1 mb-3">{{ $education->education_label }}</div>
                            <div class="text1">{{ $education->course_name }}</div>
                           
                        </div>
                        <div class="flex-shrink-0"><span class="text"><b>DATE :</b>{{ $education->from }} - {{ $education->to
                        }}</span></div>
                    </div>
                     @endforeach
                     
                </div>
            </section>
            <hr class="m-0" />
			
		
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class=" ES mb-5">Skills</h2>
                    <div class="intro1 mb-3">Programming Languages & Tools</div>
                     @foreach ($skills as $skill)
                        <label for="" style="font-size:20px;"><b>{{ $skill->name }}</b></label>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 100%; background-color:green;" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="{{ $skill->percentage }}"><b>{{ $skill->percentage }}%</b></div>
                        </div>
                      @endforeach
                    
</br>
                    <div class="wf mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
			
				<!--Project-->
			
			 <section class="resume-section" id="project">
                <div class="resume-section-content">
                    <h2 class=" ES mb-5">Projects</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
        
							</div>
						 <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
               <div class="flex-grow-1">
               <div class="card-group">
                @foreach ($projects as $project)
							  <div class="card" style="margin-right:10px;">
								<img class="card-img-top" src="{{asset('upload/project/'.$project->banner)}}" alt="Card image cap">
								<div class="card-body">
								  <h5 class="card-title">{{ $project->title }}</h5>
								  <h6 class="card-text">{{ $project->description }}</h6>
                                  <br>
                                  <br>
                              
                  <a href="{{ $project->link }}" class="btn btn-success" target="_blank">View Demo</a>
								</div>
							  </div>
                 @endforeach
							
							 
							</div>
        </div>
          </div>
            </div>
            </section>
			 <hr class="m-0" />
			
			  <!-- Awards-->
    <section class="resume-section" id="awards">
        <div class="resume-section-content">
            <h2 class="ESA mb-5">Awards</h2>
            <ul class="fa-ul mb-0">
                @foreach ($certificates as $certificate)
                <li>
                    <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                    <strong>{{ $certificate->title }}</strong>({{ $certificate->institute_name}})
                </li>
                @endforeach
            </ul>
        </div>
    </section>

 
             <!-- Blog-->
             <section class="resume-section" id="Blog">
                <div class="resume-section-content">
                    <h2 class="ES mb-5">Blog</h2>

              <div class="row ">
                <div class="col-lg-3 my-5">
                    <div class="card1">
                        <div class="card-body">
                            <img class="img1" src="assets/img/p6.jpg" alt=""width="230px" height="230px">
                           
                            <p>If you want more details,follow our activitis.</p>
                        
             <div class="text-center"><button type="submit" class="btn btn-success">==></button></div>
        </div>
    </div>
</div>
    <div class="col-lg-3 my-5">
        <div class="card1 ">
            <div class="card-body">
              <img src="assets/img/p4.jpg" alt=""width="230px" height="230px" >
          
                <p>If you want more details,follow our activitis.</p>
                        
              
            <div class="text-center"><button type="submit" class="btn btn-success">==></button></div>
</div>
</div>
</div>
      <div class="col-lg-3 my-5">
          <div class="card1">
              <div class="card-body">
                 <img src="assets/img/p7.jpg" alt=""width="230px" height="230px" >
               
                   <p>If you want more details,follow our activitis.</p>
                        
                   <div class="text-center"><button type="submit" class="btn btn-success">==> </button></div>
                  
</div>
</div>
</div>
          <div class="col-lg-3 my-5">
              <div class="card1">
                  <div class="card-body">
                      <img src="assets/img/p5.jpg" alt="" width="230px" height="230px" >
                          
                           <p>If you want more details,follow our activitis.</p>
                        
                      <div class="text-center"><button type="submit" class="btn btn-success">==></button></div>
    </div>
        </div>
            </div>
              



<!-- Appointments-->
    <section class="resume-section" id="Appointments">
        <div class="resume-section-content">
            <h2 class="ESA mb-5">Appointments</h2>
            <div class="row g-0">
                <h3>My Appointments</h3>
                <p>Before booking an appointment please
                    <br> check my availability </br>
                </p>
                <div class="col-lg-5">
                    <div>
                        <br><br>
                        <div class="icon">
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Saturday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Sunday :
                                </b> 9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Monday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Tuesday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Wednesday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Thursday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                            <span class="check"><i class="fa-solid fa-circle-check fa-beat"
                                    style="background-color:white;color:coral; font-size: 1.5rem; "></i> <b>Friday :
                                </b>9:15:40 AM - 9:15:40 AM</span><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center reservation-form-bg">
                    <form action="{{ route('appointments.store') }}" method="post" role="form" class="php-email-form"
                        data-aos="fade-up" data-aos-delay="100">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" required data-msg="Please enter at least 4 chars">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="validate">
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required data-rule="email"
                                    data-msg="Please enter a valid email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="date" name="date" class="form-control" id="date" placeholder="Date"
                                    data-rule="minlen:4" required data-msg="Please enter at least 4 chars">
                                @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="time" class="form-control" name="time" id="time" placeholder="Time"
                                    data-rule="minlen:4" required data-msg="Please enter at least 4 chars">
                                @error('time')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" class="form-control" name="people" id="people"
                                    placeholder="# of people" required data-rule="minlen:1"
                                    data-msg="Please enter at least 1 chars">
                                @error('people')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" required name="message" rows="5"
                                placeholder="Message"></textarea>
                            @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="validate"></div>
                        </div>
                        <div class="text-center mt-3"><button type="submit" class="btn btn-success">Book Appointment</button>
                        </div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>
        </div>
    </section>



    <!--Section: Contact v.2-->
    <section class="mb-4" id="contact" style="margin: 50px 50px 50px 50px;margin-bottom:90px!important">

        <!--Section heading-->
        <h2 class=" ES h1-responsive font-weight-bold text-center my-4">Contact</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
            contact directly.I will come back to you within
            a matter of hours to help you.</p>

        <form action="{{ route('contacts.store') }}" method="post" class="php-email-form p-3 p-md-4">
            @csrf
            <div class="row">
                <div class="col-xl-6 form-group">
                    <input type="text" name="full_name" class="form-control" id="name" placeholder="Your Full name"
                        required>
                    @error('full_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-xl-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <p></p>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" id="subject" placeholder="Phone">
            </div>
            <p></p>
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="text-center "><button type="submit" class="btn btn-success">Send Message</button></div>
        </form>
        <!--End Contact Form -->
  
    </div>
@endsection