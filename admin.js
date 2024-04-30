function calculateTotal()
    {
        var noofstudents=document.getElementById("noofstudents").value;
        var noofstudents = parseInt(noofstudents, 10);
        var rsperstudent=document.getElementById("rsperstudent").value;
        var rsperstudent = parseInt(rsperstudent, 10);
        var total=noofstudents*rsperstudent;
        document.getElementById("total").value = total;
    }
    function calculateNumberOfDays(){
        var maxmarks=document.getElementById("max-marks").value;
        var maxmarks = parseInt(maxmarks, 10);
        var noofpapers=document.getElementById("number-of-papers").value;
        var noofpapers = parseInt(noofpapers, 10);
        var noofdays=Math.round(maxmarks/noofpapers);
        document.getElementById("noofdays").value = noofdays;
    }
    function calculateAllowance()
    {
        var noofstudents=document.getElementById("noofstudents").value;
        var noofstudents = parseInt(noofstudents, 10);
        var rsperstudent=document.getElementById("rsperstudent").value;
        var rsperstudent = parseInt(rsperstudent, 10);
        var amount=noofstudents*rsperstudent;
        document.getElementById("amount").value = amount;

        var noofdays=document.getElementById("noofdays").value;
        var noofdays = parseInt(noofdays, 10);
        var travellingallowanceperday=document.getElementById("travellingallowanceperday").value;
        var travellingallowanceperday = parseInt(travellingallowanceperday, 10);
        var travellingallowance=noofdays*travellingallowanceperday;
        document.getElementById("travellingallowance").value = travellingallowance;

        var total=amount+travellingallowance;
        document.getElementById("total").value = total;
    }
    function calculateRemuneration(){
        var noofduties=document.getElementById("noofduties").value;
        var noofduties = parseInt(noofduties, 10);
        var rperduty=document.getElementById("rperduty").value;
        var rperduty = parseInt(rperduty, 10);
        var total=(noofduties*rperduty);
        document.getElementById("total").value = total;
    }
    // function checkOption(designation) {
    //     var selectedValue = designation.options[designation.selectedIndex].value;
    //     var noofduties = document.getElementById("nofoduties");
    //     noofduties.disabled = selectedValue == 5 ? true : false;
    //     if (!noofduties.disabled) {
    //         noofduties.focus();
    //     }
    // }
    function populate(s1,s2,s3)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    var s3=document.getElementById(s3);
    s3.innerHTML = "";
    if(s1.value=="EXTC")
    {
        if(s2.value=="I(Odd)")
        {
            var optionArray = ['MATHS I|Engg.Maths I' ,'PHY I|Physics I', 'CHEM I|Chemistry I','BEE|BEE', 'MECHANICS|Mechanics' ];
        }
        else if(s2.value=="II(Even)")
        {
            var optionArray = ['MATHS II|Engg.Maths II' ,'PHY II|Physics II', 'CHEM II|Chemistry II','CP|Computer Programming', 'GRAPHICS|Engg. Graphics' ];
        }
        else if(s2.value=="III(Odd)")
        {
            var optionArray = ['AME I|AME I' ,'DLD|Digital Logic Design', 'EDC|Electronic Devices and Circuits','EICS|Electronic Instrumentation and Control System', 'ENT|Electric Network Theory' ];
        }
        else if(s2.value=="IV(Even)")
        {
            var optionArray = ['AME II|AME II' ,'MC|Microcontrollers', 'LIC|Linear Integrated Circuits','PCE|Principles of Communication Engg.', 'SS|Signal and Systems' ];
        }
        else if(s2.value=="V(Odd)")
        {
            var optionArray = ['DVD|Digital VLSI Design' ,'DCOM|Digital Communication', 'RSA|Random Signal Analysis','DTSP|Discrete Time Signal Processing', 'ST|Sensor Technology', 'DCE|Data Compression and Encryption', 'DSA|Data Structures and Algorithms' ];
        }
        else if(s2.value=="VI(Even)")
        {
            var optionArray = ['EMA|Electromagnetics and Antenna' ,'ML|Machine Learning', 'IPMV|Image Processing and Machine Vision','CCN|Computer Communication Network', 'DBMS|Database Management System','MSVD|Mixed Signal VLSI Design', 'IOT4.0|IOT And Industry 4.0','SAP|Speech and Audio Processing' ];
        }
        else if(s2.value=="VII(Odd)")
        {
            var optionArray = ['ME|Microwave Engg.' ,'MCS|Mobile Communication Systems', 'AI|Artificial Intelligence','SNSC|Satellite and Nano Satellite Communication', 'ESR|Embedded Systems and RTOS', 'BDA|Big Data Analytics', 'NNDL|Neural Network and Deep Learning', 'WR|Wireless Networks','Robotics|Robotics','CCS|Cloud Computing and Security', 'PLM|Product Lifecycle Management','RE|Reliability Engg.','MIS|Management Information System','OR|Operation Research', 'DE|Design of Experiments','CSL|CyberSecurity and Laws','DMMMM|Disaster Management and Mitigation Measures','EAM|Energy Audit and Management','DE|Development Engg.' ];
        }
        else if(s2.value=="VIII(Even)")
        {
            var optionArray = ['OCN|Optical Communication Networks' ,'ARVR|ARVR', '5G|5G Technology','SOC|System On-Chip', 'WDE|Web Design','NLP|Natural Language Processing','RD|RF Design','AV|Autonomos Vehicle','FDS|Fundamentals of Data Science','PM|Project Management ','FM|Finance Management','EDM|Entreprenuership Development and Management','HRM|Human Resource Management','PEC|Professional Ethics and CSR','RM|Research Methodology','IP|IPR and Patenting','DBM|Digital Business Management','EM|Environmental Management' ];
        }
    }
    if(s1.value=="COMPS")
    {
        if(s1.value=="I(Odd)")
        {
            var optionArray = ['MATHS I|Engg.Maths I' ,'PHY I|Physics I', 'CHEM I|Chemistry I','BEE|BEE', 'MECHANICS|Mechanics' ];
        }
        else if(s1.value=="II(Even)")
        {
            var optionArray = ['MATHS II|Engg.Maths II' ,'PHY II|Physics II', 'CHEM II|Chemistry II','CP|Computer Programming', 'GRAPHICS|Engg. Graphics' ];
        }
        else if(s1.value=="III(Odd)")
        {
            var optionArray = ['AME I|AME I' ,'DSG|Discrete Structures and Graph Theory', 'DS|Data Structure','DLC|EDigital Logic & Computer Architecture', 'CG|Computer Graphics' ];
        }
        else if(s1.value=="IV(Even)")
        {
            var optionArray = ['AME II|AME II' ,'AA|Analysis of Algorithm', 'DBMS|Database Management System','OS|Operating Systems', 'MC|Microprocessor' ];
        }
        else if(s1.value=="V(Odd)")
        {
            var optionArray = ['CS|Theory of Computer Science' ,'SE|Software Engineering', 'CNN|Computer Network','DWM|Data Warehousing and Mining', 'ADBMS|Advance Database Management System', 'IP|Internet Programming', 'IOT|Internet of Things', 'PGM|Probabilistic Graphical Models' ];
        }
        else if(s1.value=="VI(Even)")
        {
            var optionArray = ['SPC|System Programming & Compiler Construction' ,'CSS|Cryptography & System Security', 'MC|Mobile Computing','AI|Artificial Intelligence', 'QA|Quantitative Analysis','MS|Multimedia System', 'IS|Infrastructure Security','DSIP|Digital Signal & Image Processing' ];
        }
        else if(s1.value=="VII(Odd)")
        {
            var optionArray = ['ML|Machine Learning' ,'BDA|Big Data Analytics','CV|Computer Vision', 'AWN|Adhoc Wireless Network', 'EHS|Ethical Hacking and Security', 'NLP|Natural Language Processing', 'ARVR|Augmented and Virtual Reality','IC|Internet Communication','BC|Blockchain','IR|Information Retrieval', 'PLM|Product Lifecycle Management','RE|Reliability Engg.','MIS|Management Information System','OR|Operation Research', 'DE|Design of Experiments','CSL|CyberSecurity and Laws','DMMMM|Disaster Management and Mitigation Measures','EAM|Energy Audit and Management','DE|Development Engg.' ];
        }
        else if(s1.value=="VIII(Even)")
        {
            var optionArray = ['DC|Distributed Computing' ,'ADS|Applied Data Science', 'SDN|Software Defined Network','DF|Digital Forensic', 'DL|Deep Learning','SMA|Social Media Analytics','HPC|High Performance Computing','SAD|Secure Application Development','OML|Optimization in Machine Learning','QC|Quantum Computing' ,'PM|Project Management ','FM|Finance Management','EDM|Entreprenuership Development and Management','HRM|Human Resource Management','PEC|Professional Ethics and CSR','RM|Research Methodology','IP|IPR and Patenting','DBM|Digital Business Management','EM|Environmental Management' ];
        }
    }
    if(s1.value=="IT")
    {
        if(s1.value=="I(Odd)")
        {
            var optionArray = ['MATHS I|Engg.Maths I' ,'PHY I|Physics I', 'CHEM I|Chemistry I','BEE|BEE', 'MECHANICS|Mechanics' ];
        }
        else if(s1.value=="II(Even)")
        {
            var optionArray = ['MATHS II|Engg.Maths II' ,'PHY II|Physics II', 'CHEM II|Chemistry II','CP|Computer Programming', 'GRAPHICS|Engg. Graphics' ];
        }
        else if(s1.value=="III(Odd)")
        {
            var optionArray = ['AME I|AME I' ,'DSA|Data Structures and Analysis', 'DBMS|Database Management System','JAV|Java Programming', 'FSE|Foundations of Software Engineering' ];
        }
        else if(s1.value=="IV(Even)")
        {
            var optionArray = ['AME II|AME II' ,'CNN|Computer Network and Network Design', 'OS|Operating Systems','AT|Automata Theory', 'COA|Computer Organization and Architecture' ];
        }
        else if(s1.value=="V(Odd)")
        {
            var optionArray = ['IP|Internet Programming' ,'CNS|Computer Network Security', 'EB|Entrepreneurship and E-Business','IOT|Internet of Things', 'ADBIR|Advanced DatabaseManagement System and Information Retrieval', 'WT|Wireless Technology', 'CG|Computer Graphics', 'ADSA|Advanced Data Structures and Algorithmic Performance Analysis' ];
        }
        else if(s1.value=="VI(Even)")
        {
            var optionArray = ['DMBI|Data Mining & Business Intelligence' ,'Web X.0|Web X.0', 'ASP|Advanced Software Engineering and Project Management','AIDS – I|Artificial Intelligence and Data Science – I', 'BDA|Big Data Analytics','IOT|IoT Data Analytics', 'IP|Image Processing','CCS|Cloud Computing and Services' ];
        }
        else if(s1.value=="VII(Odd)")
        {
            var optionArray = ['AIDS - II|Artificial Intelligence and Data Science - II' ,'IOE|Internet of Everything','RL|Reinforcement Learning', 'MLDL|Machine Learning and Deep Learning', 'ACN|Advanced Computer Networks', 'EHDF|Ethical Hacking and Digital Forensics', 'MMS|Multimedia Systems','CV|Computer Vision','UI/UX|UI/UX Design Specializations','STQA|Software Testing & Quality Assurance', 'PLM|Product Lifecycle Management','RE|Reliability Engg.','MIS|Management Information System','OR|Operation Research', 'DE|Design of Experiments','CSL|CyberSecurity and Laws','DMMMM|Disaster Management and Mitigation Measures','EAM|Energy Audit and Management','DE|Development Engg.' ];
        }
        else if(s1.value=="VIII(Even)")
        {
            var optionArray = ['BCDLT|Blockchain and DLT' ,'NLP|Natural Language Processing', 'EAI|Explainable AI & Responsible AI','CS|Cloud Security', 'EC|Edge Computing','RSGIS|Remote Sensing and GIS','ARVR|Augmented Reality – Virtual Reality','HPC|High Performance Computing','OT|Optimization Techniques','PM|Project Management ','FM|Finance Management','EDM|Entreprenuership Development and Management','HRM|Human Resource Management','PEC|Professional Ethics and CSR','RM|Research Methodology','IP|IPR and Patenting','DBM|Digital Business Management','EM|Environmental Management' ];
        }
    }
    if(s1.value=="AIDS")
    {
        if(s1.value=="I(Odd)")
        {
            var optionArray = ['MATHS I|Engg.Maths I' ,'PHY I|Physics I', 'CHEM I|Chemistry I','BEE|BEE', 'MECHANICS|Mechanics' ];
        }
        else if(s1.value=="II(Even)")
        {
            var optionArray = ['MATHS II|Engg.Maths II' ,'PHY II|Physics II', 'CHEM II|Chemistry II','CP|Computer Programming', 'GRAPHICS|Engg. Graphics' ];
        }
        else if(s1.value=="III(Odd)")
        {
            var optionArray = ['AME I|AME I' ,'DSGT|Discrete Structures and Graph Theory', 'DS|Data Structure','DLCA|Digital Logic & Computer Architecture', 'CG|Computer Graphics' ];
        }
        else if(s1.value=="IV(Even)")
        {
            var optionArray = ['AME II|AME II' ,'AA|Analysis of Algorithm', 'OS|Operating Systems','DBMS|Database Management Systems', 'MP|Microprocessor' ];
        }
        else if(s1.value=="V(Odd)")
        {
            var optionArray = ['AI|Artificial Intelligence' ,'DWM|Data Warehousing and Mining', 'SE|Software Engineering','ITC|Information Theory and Coding', 'CN|Computer Networks', 'IPMV|Image and Video Processing', 'ESD|Embedded System and Design', 'ABF|Algorithms for Bioinformatics' ];
        }
        else if(s1.value=="VI(Even)")
        {
            var optionArray = ['ANN|Artificial Neural Network' ,'ML|Machine Learning', 'DAV|Data Analytics and Visualization','BDA|Big Data Analytics', 'AI-E|AI in E-Commerce','AI-A|AI in Agriculture', 'IOT|Internet of Things','BFDM|Bioinformatics Data Management' ];
        }
        else if(s1.value=="VII(Odd)")
        {
            var optionArray = ['PE|Power Electronics' ,'IOT|Internet of Things','GPPC|Graphic Processor and Parallel Computing', 'VLSI|Mixed Signal VLSI Design', 'ANT|Advanced Networking Technology', 'DC|Data Compression', 'Robotics|Robotics','DSA|Data Science and Applications','CC|Cloud Computing', 'PLM|Product Lifecycle Management','RE|Reliability Engg.','MIS|Management Information System','OR|Operation Research', 'DE|Design of Experiments','CSL|CyberSecurity and Laws','DMMMM|Disaster Management and Mitigation Measures','EAM|Energy Audit and Management','DE|Development Engg.' ];
        }
        else if(s1.value=="VIII(Even)")
        {
            var optionArray = ['IA|Industrial Automation' ,'MEMS|Microelectromechanical Systems', 'VI|Virtual Instrumentation','APE|Advanced Power Electronics', 'WD|Web Design','ICT|Integrated Circuit Technology','SOC|System On Chip','IIOT|Industrial Internet of Things','NGN|Next Generation Networks','PM|Project Management ','FM|Finance Management','EDM|Entreprenuership Development and Management','HRM|Human Resource Management','PEC|Professional Ethics and CSR','RM|Research Methodology','IP|IPR and Patenting','DBM|Digital Business Management','EM|Environmental Management' ];
        }
    }
    if(s1.value=="BSH")
    {
        if(s1.value=="I(Odd)")
        {
            var optionArray = ['MATHS I|Engg.Maths I' ,'PHY I|Physics I', 'CHEM I|Chemistry I','BEE|BEE', 'MECHANICS|Mechanics' ];
        }
        else if(s1.value=="II(Even)")
        {
            var optionArray = ['MATHS II|Engg.Maths II' ,'PHY II|Physics II', 'CHEM II|Chemistry II','CP|Computer Programming', 'GRAPHICS|Engg. Graphics' ];
        }
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s3.options.add(newOption);
    }
}
function faculty(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="COMPS")
    {
        var optionArray = ['Sarita Ambadekar|Sarita Ambadekar' ,'Shyamal Virnodkar|Shyamal Virnodkar', 'Dhanashree Toradmalle|Dhanashree Toradmalle','Kavita Bathe|Kavita Bathe','Mrunali Desai|Mrunali Desai','Mandar Bivalkar|Mandar Bivalkar','Jyoti Wadmare|Jyoti Wadmare','Chitra Bhole|Chitra Bhole','Nisha Vanjari|Nisha Vanjari','Shubhada Labde|Shubhada Labde','Aarti Sahitya|Aarti Sahitya','Pradnya Patil|Pradnya Patil','Shreya Patankar|Shreya Patankar','Madhura Phadke|Madhura Phadke','Pradnya Bhangale|Pradnya Bhangale','Minal Sonkar|Minal Sonkar','Surekha Janrao|Surekha Janrao','Nilesh Yadav|Nilesh Yadav','Abhijit Patil|Abhijit Patil','Priyanka Deshmukh|Priyanka Deshmukh','Vandana Salve|Vandana Salve','Vaishali Patil|Vaishali Patil','Pallavi Patil|Pallavi Patil','Hema Galiyal|Hema Galiyal','Vijaya Sagvekar|Vijaya Sagvekar','Nitin Urankar|Nitin Urankar','Santosh Jadhav|Santosh Jadhav','Anand Kandalkar|Anand Kandalkar','Milind Thorat|Milind Thorat','Kalpana Bhamare|Kalpana Bhamare','Kishor Makwana|Kishor Makwana','Rajesh Jadav|Rajesh Jadav'];
    }
    else if(s1.value=="IT")
    {
        var optionArray = ['Hariram Chavan|Hariram Chavan' ,'Radhika Kotecha|Radhika Kotecha', 'Uday Rote|Uday Rote','Mansing Rathod|Mansing Rathod','Seema Yadav|Seema Yadav','Vijaya Pinjarkar|Vijaya Pinjarkar','Nasim Shah|Nasim Shah','Harsh Bhor|Harsh Bhor','Reena Lokare|Reena Lokare','Sarita Rathod|Sarita Rathod','Bhagyashree Ingle|Bhagyashree Ingle','Sudneshna Balliarsingh|Sudneshna Balliarsingh','Kiran Hande|Kiran Hande','Pallavi Chavda|Pallavi Chavda','Mohd Raza Ansari|Mohd Raza Ansari','Kavita Chimankare|Kavita Chimankare','Vishal Khandekar|Vishal Khandekar','Dinesh Paulekar|Dinesh Paulekar','Narendra Chandeliya|Narendra Chandeliya'];
    }
    else if(s1.value=="AIDS")
    {
        var optionArray = ['Milind Nemade|Milind Nemade' ,'Vaishali Wadhe|Vaishali Wadhe', 'Ghanshyam Phadke|Ghanshyam Phadke','Ganesh Wadmare|Ganesh Wadmare','Devanand Bathe|Devanand Bathe','Sheetal Jagtap|Sheetal Jagtap','Pankaj Deshmukh|Pankaj Deshmukh','Medha Asurlekar|Medha Asurlekar','Sejal Shah|Sejal Shah','Vidya Sagvekar|Vidya Sagvekar','Sarika Mane|Sarika Mane','Swati Nandusekar|Swati Nandusekar','Sudir Kasar|Sudir Kasar','Kavita Pashte|Kavita Pashte','Sachin Dhale|Sachin Dhale','Bharati Sansare|Bharati Sansare','Suresh Ubale|Suresh Ubale','Prabhu Jadhav|Prabhu Jadhav'];
    }
    else if(s1.value=="EXTC")
    {
        var optionArray = ['Jayashree Khanapuri|Jayashree Khanapuri' ,'Namrata Ansari|Namrata Ansari', 'Vricha Chavan|Vricha Chavan','Sandhya Kadam|Sandhya Kadam','Tilottama Dhake|Tilottama Dhake','Rashmi Adatkar|Rashmi Adatkar','Kiran Rathod|Kiran Rathod','Pradnya Kamble|Pradnya Kamble','Prashant Upadhyay|Prashant Upadhyay','Martand Jha|Martand Jha','Sandeep Mishra|Sandeep Mishra','Rupali Satpute|Rupali Satpute','Sunil Patil|Sunil Patil','Harshwardhan Ahire|Harshwardhan Ahire','Pranali Hatode|Pranali Hatode','Amit Kukreja|Amit Kukreja','Rupali Kadu|Rupali Kadu','Sandhya Deshpande|Sandhya Deshpande','Priya Hankare|Priya Hankare','Swati Shinde|Swati Shinde','Sagar Mhatre|Sagar Mhatre','Priya Gupta|Priya Gupta','Reshma Rasal|Reshma Rasal','Archana Kshirsagar|Archana Kshirsagar'];
    }
    else if(s1.value=="BSH")
    {
        var optionArray = ['Harsha Mishra|Harsha Mishra' ,'Vaishali Ghadyalji|Vaishali Ghadyalji', 'Rajesh Meshram|Rajesh Meshram','Sanjiv Badhe|Sanjiv Badhe','Vaishali Dabholkar|Vaishali Dabholkar','Vrushali Deole|Vrushali Deole','Umesh Shinde|Umesh Shinde','Shahin Pathan|Shahin Pathan','Vivek Mane|Vivek Mane','Nitin Kenjale|Nitin Kenjale','Jitendra Shelar|Jitendra Shelar','Pashmi Kumawat|Pashmi Kumawat','Kirtikumar Patel|Kirtikumar Patel','Divesh kumar Singh|Divesh kumar Singh','Thulasi Pillai|Thulasi Pillai','Nilesh Ahirrao|Nilesh Ahirrao','Anita Padhye|Anita Padhye','Prehelika Pai|Prehelika Pai','Rama Kulkarni|Rama Kulkarni','Rekha Rajput|Rekha Rajput','Vidya Nikumbh|Vidya Nikumbh','Prakajta Jadhav|Prakajta Jadhav','Rajesh Nirgude|Rajesh Nirgude','Anil Mirgal|Anil Mirgal','Rajesh Gaikwad|Rajesh Gaikwad','Chaitali Purav|Chaitali Purav','Minal Deshpande|Minal Deshpande','Ashok Ghadge|Ashok Ghadge','Meera Jagtap|Meera Jagtap','Manoj Borkhade|Manoj Borkhade','Amitsingh Rawat|Amitsingh Rawat'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function get(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="A")
    {
        var optionArray = ['A1|A1' ,'A2|A2', 'A3|A3','A4|A4'];
    }
    else if(s1.value=="B")
    {
        var optionArray = ['B1|B1' ,'B2|B2', 'B3|B3','B4|B4'];
    }
    else if(s1.value=="C")
    {
        var optionArray = ['C1|C1' ,'C2|C2', 'C3|C3','C4|C4'];
    }
    else if(s1.value=="D")
    {
        var optionArray = ['D1|D1' ,'D2|D2', 'D3|D3','D4|D4'];
    }
    else if(s1.value=="E")
    {
        var optionArray = ['E1|E1' ,'E2|E2', 'E3|E3','E4|E4'];
    }
    else if(s1.value=="F")
    {
        var optionArray = ['F1|F1' ,'F2|F2', 'F3|F3','F4|F4'];
    }
    else if(s1.value=="G")
    {
        var optionArray = ['G1|G1' ,'G2|G2', 'G3|G3','G4|G4'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function select(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="Regular")
    {
        var optionArray = ['Termwork|Termwork' ,'IA|IA', 'TT1|Term Test 1','TT2|Term Test 2','P&O|Oral with Practical','O|Oral','Mini Project|Mini Project','Minor Project|Minor Project','Major Project A|Major Project A','Major Project B|Major Project B'];
    }
    else if(s1.value=="Supplementary")
    {
        var optionArray = ['Termwork|Termwork' ,'IA|IA', 'TT1|Term Test 1','TT2|Term Test 2','P&O|Oral with Practical','O|Oral', 'Mini Project|Mini Project','Minor Project|Minor Project','Major Project A|Major Project A','Major Project B|Major Project B'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function set(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="8")
    {
        var optionArray = ['25|25'];
    }
    else if(s1.value=="12")
    {
        var optionArray = ['50|50'];
    }
    else if(s1.value=="TT1"||s1.value=="TT2")
    {
        var optionArray = ['5|5'];
    }
    else if(s1.value=="IA")
    {
        var optionArray = ['3|3'];
    }
    else if(s1.value=="Termwork")
    {
        var optionArray = ['8|8','12|12','28|28'];
    }
    else if(s1.value=="P&O")
    {
        var optionArray = ['12|12','22|22'];
    }
    else if(s1.value=="O")
    {
        var optionArray = ['8|8','12|12'];
    }
    else if(s1.value=="Mini Project"||s1.value=="Minor Project")
    {
        var optionArray = ['18|18'];
    }
    else if(s1.value=="Major Project A"||s1.value=="Major Project B")
    {
        var optionArray = ['22|22'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function put(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="CC")
    {
        var optionArray = ['225|225'];
    }
    else if(s1.value=="SS")
    {
        var optionArray = ['175|175'];
    }
    else if(s1.value=="JS")
    {
        var optionArray = ['125|125','160|160'];
    }
    else if(s1.value=="R")
    {
        var optionArray = ['80|80'];
    }
    else if(s1.value=="US")
    {
        var optionArray = ['125|125'];
    }
    else if(s1.value=="P")
    {
        var optionArray = ['40|40'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function push(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="Lab-Assistant")
    {
        var optionArray = ['100|100'];
    }
    else if(s1.value=="Lab-Attendant")
    {
        var optionArray = ['60|60'];
    }
    else if(s1.value=="Expert")
    {
        var optionArray = ['120|120'];
    }
    else if(s1.value=="Peon")
    {
        var optionArray = ['50|50'];
    }
    else if(s1.value=="TW")
    {
        var optionArray = ['100|100'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}
function be(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value=="QP")
    {
        var optionArray = ['500|500'];
    }
    else if(s1.value=="AK")
    {
        var optionArray = ['300|300'];
    }
    else if(s1.value=="QP&AK")
    {
        var optionArray = ['800|800'];
    }
    else if(s1.value=="PA")
    {
        var optionArray = ['8|8','10|10'];
    }
    for (option in optionArray)
    {
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}