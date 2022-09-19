?php 
        include_once 'index.php';



         ?><head>
      <link rel="stylesheet" href="styles.css">
      </head>



<body>
    <main>
        <form action="insert.php" method="post">


            

            

            <div class="Section-cover double" style="padding:20px;"> 




                <h2>Profile:</h2>


                <div>


    <label for="ActivityDate">Insert the start date of your activity:</label><br>
    <input type="date" id="ActivityDate" name="ActivityDate"
       value=""
       min="2018-01-01" max="2023-12-31">

       
</div>

            <div class="">
                <label for="BnFCode">Beneficiary Code::</label>
                <input type="text" name="BnFCode" required="required" placeholder="Enter your beneficiary code here" />
            </div>




            <div class="">
                <label for="FullName">Full Name:</label>
                <input type="text" name="FullName" required="required" placeholder="Enter your full name here" />
            </div>


            <div class="">
                <label for="Phone">Phone Number:</label>
                <input type="tel" id="phone" name="Phone" required="required" placeholder="Enter your phone number here" >


            </div>



            <div class="">
                <label for="Email">Email:</label>
                <input type="email" name="Email" required="required" placeholder="Enter your email" />
            </div>






            <div>
            <label for="Gender">Please select your gender:</label>
              <select name="Gender" id="Gender">
              <option>--Please choose an option--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

              </select>
            </div>      


            <div>

            <label for="Education">Please select your Education:</label>
              <select name="Education" id="Education">
                <option value="">--Please choose an option--</option>
                <option value="NoEducation">No Formal Education</option>
                <option value="Primary">Primay School</option>
                <option value="HighSchool">High School</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Masters">Masters</option>
                <option value="Other">Other</option>
              </select>
            </div>






            <div>

            <label for="WorkStatus">Please select your work status:</label>
              <select name="WorkStatus" id="WorkStatus">
                <option value="">--Please choose an option--</option>
                <option value="GraduateUnemployed">Graduate and un-employed</option>
                <option value="Precarious">Seasonal, Informal or Daily Wages</option>
                <option value="PartTime">Part-time Employed</option>
                <option value="FullTime">Full-time Employed</option>
                <option value="Other">Other</option>
              </select>
            </div>




            <div>

            <label for="MigrationStatus">Please select your migration status</label>
              <select name="MigrationStatus" id="MigrationStatus">
                <option value="">--Please choose an option--</option>
                <option value="Local">Local Citizen</option>
                <option value="Refugee">Refugee</option>
                <option value="IDP">IDP</option>
                <option value="Returnee">Returnee</option>
              </select>
            </div>








            






            <div>
            <label for="Governorate">Governorate</label>
              <select name="Governorate" id="Governorate">
                <option value="">--Please choose an option--</option>
                <option value="Baghdad">Baghdad</option>
                <option value="Erbil">Erbil</option>
                <option value="Basra">Basra</option>
              </select>
            </div>











           








            <button type="submit" value="Submit">Submit</button>
        </form>


                    </div>

    </main>
</body>
</html>