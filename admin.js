function calculateTotal()
    {
        var noofstudents=document.getElementById("noofstudents").value;
        var noofstudents = parseInt(noofstudents, 10);
        var rsperstudent=document.getElementById("rsperstudent").value;
        var rsperstudent = parseInt(rsperstudent, 10);
        var total=noofstudents*rsperstudent;
        document.getElementById("total").value = total;
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
    function populate(s1,s2)
{
    var s1=document.getElementById(s1);
    var s2=document.getElementById(s2);
    s2.innerHTML = "";
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
        var optionArray = ['AME I|AME I' ,'DLD|Digital Logic Design', 'EDC|Electronic Devices and Circuits','EICS|Electronic Instrumentation and Control System', 'ENT|Electric Network Theory' ];
    }
    else if(s1.value=="IV(Even)")
    {
        var optionArray = ['AME II|AME II' ,'MC|Microcontrollers', 'LIC|Linear Integrated Circuits','PCE|Principles of Communication Engg.', 'SS|Signal and Systems' ];
    }
    else if(s1.value=="V(Odd)")
    {
        var optionArray = ['DVD|Digital VLSI Design' ,'DCOM|Digital Communication', 'RSA|Random Signal Analysis','DTSP|Discrete Time Signal Processing', 'ST|Sensor Technology', 'DCE|Data Compression and Encryption', 'DSA|Data Structures and Algorithms' ];
    }
    else if(s1.value=="VI(Even)")
    {
        var optionArray = ['EMA|Electromagnetics and Antenna' ,'ML|Machine Learning', 'IPMV|Image Processing and Machine Vision','CCN|Computer Communication Network', 'DBMS|Database Management System','MSVD|Mixed Signal VLSI Design', 'IOT4.0|IOT And Industry 4.0','SAP|Speech and Audio Processing' ];
    }
    else if(s1.value=="VII(Odd)")
    {
        var optionArray = ['ME|Microwave Engg.' ,'MCS|Mobile Communication Systems', 'AI|Artificial Intelligence','SNSC|Satellite and Nano Satellite Communication', 'ESR|Embedded Systems and RTOS', 'BDA|Big Data Analytics', 'NNDL|Neural Network and Deep Learning', 'WR|Wireless Networks','Robotics|Robotics','CCS|Cloud Computing and Security', 'PLM|Product Lifecycle Management','RE|Reliability Engg.','MIS|Management Information System','OR|Operation Research', 'DE|Design of Experiments','CSL|CyberSecurity and Laws','DMMMM|Disaster Management and Mitigation Measures','EAM|Energy Audit and Management','DE|Development Engg.' ];
    }
    else if(s1.value=="VIII(Even)")
    {
        var optionArray = ['OCN|Optical Communication Networks' ,'ARVR|ARVR', '5G|5G Technology','SOC|System On-Chip', 'WDE|Web Design','NLP|Natural Language Processing','RD|RF Design','AV|Autonomos Vehicle','FDS|Fundamentals of Data Science','PM|Project Management ','FM|Finance Management','EDM|Entreprenuership Development and Management','HRM|Human Resource Management','PEC|Professional Ethics and CSR','RM|Research Methodology','IP|IPR and Patenting','DBM|Digital Business Management','EM|Environmental Management' ];
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
        var optionArray = ['Termwork|Termwork' ,'IA|IA', 'TT1|Term Test 1','TT2|Term Test 2','P&O|Practical & Oral','O|Oral','ESE|End Semester'];
    }
    else if(s1.value=="KT")
    {
        var optionArray = ['Termwork|Termwork' ,'IA|IA', 'TT1|Term Test 1','TT2|Term Test 2','P&O|Practical & Oral','O|Oral','ESE|End Semester','SE|Supplementary Exam'];
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