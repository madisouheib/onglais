<div id="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content col-8 container ">
                 <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="form-title text-center">  التسجيل في المبادرة الرمضانية لتعلم اللغة الإنجليزية </h4>
                        <img src="images/logo.png"  style="height: 200px;width:200px;margin: auto;display: block;">
                        <div class="form-group">
                            <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus   placeholder="الإسم الكامل"/>
                        </div>
                        <div class="form-group">
                            <input   id="email" type="email" class="form-input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الالإلكتروني"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="major" id="major" placeholder="تخصصك أو مهنتك"/>
                            <span toggle="#major" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group" >
            <select class="form-control" name="gendre" >
                  <option value="" disabled selected>الجنس </option>
                <option value="male">
أنثى
                    
                </option>
                    <option value="female">
ذكر
                    
                </option>
            </select>
                        </div>
    <div class="form-group">
            <select class="form-control" name="lang">
                  <option value="" disabled selected>مهتم بتعلم اللغة </option>
                <option value="1">
إنجليزية
                    
                </option>
                    <option value="2">
إسبانية
                    
                </option>
                     <option value="3">
تركية
                    
                </option>
                      <option value="4">
فرنسية
                    
                </option>
                   <option value="5">
الألمانية
                    
                </option>
            </select>
                        </div>


                             <div class="form-group">
            <select class="form-control" name="level" >
                  <option value="" disabled selected>مستواك في اللغة  </option>
                <option value="1">
متقدم
                    
                </option>
                    <option value="2">
متوسط
                    
                </option>
                     <option value="3">
مبتدئ
                    
                </option>
            </select>
                        </div>


     <div class="form-group"> 
            <select class="form-control" name="typeroom"  >
                     <option value="" disabled selected>القاعة </option>
                <option value="male">
بنات فقط
                    
                </option>
                    <option value="female">
ذكور فقط
                    
                </option>
                   <option value="open">
غير مهم
                    
                </option>
            </select>
                        </div>

                          <div class="form-group">
                            <input type="text" class="form-input" name="fburl" id="fburl" placeholder="رابط حسابك في الفيسبوك"/>
                        </div> 

                     
                          
                    
                        <div class="form-group">
                          
                            <button class="form-submit" type="submit">  تسجيل  </button>
                        </div>
                            </div>
                    </form>
                   
                </div>
            </div>
        </section>


</div>