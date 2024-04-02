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
    else if(s1.value=="C")
    {
        var optionArray = ['C1|C1' ,'C2|C2', 'C3|C3','C4|C4'];
    }
    else if(s1.value=="D")
    {
        var optionArray = ['D1|D1' ,'D2|D2', 'D3|D3','D4|D4'];
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