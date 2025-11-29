<!DOCTYPE html>
<html>
<head>
    <title>Doctor Portal Sidebar</title>
</head>
<body>

<h2>Doctor Portal Sidebar</h2>

<ul id="sidebarMenu">
    <li id="menu1" onclick="menuClick('Dashboard')">Dashboard</li>
    <li id="menu2" onclick="menuClick('Patient Profiles')">Patient Profiles</li>
    <li id="menu3" onclick="menuClick('Appointments')">Appointments</li>
    <li id="menu4" onclick="menuClick('Prescriptions')">Prescriptions</li>
    <li id="menu5" onclick="menuClick('Lab Results')">Lab Results</li>
    <li id="menu6" onclick="menuClick('Messages')">Messages</li>
</ul>

<div id="output"></div>

<script>
    // Track menu usage
    var usage = {
        "Dashboard": 0,
        "Patient Profiles": 0,
        "Appointments": 0,
        "Prescriptions": 0,
        "Lab Results": 0,
        "Messages": 0
    };

    function menuClick(menuName) {
        usage[menuName] += 1;

        // Sort menu items by usage
        var sorted = Object.keys(usage).sort(function(a, b) {
            return usage[b] - usage[a];
        });

        // Rebuild menu using innerHTML
        var menuHtml = "";
        for (var i = 0; i < sorted.length; i++) {
            var name = sorted[i];
            if (usage[name] > 0) {
                menuHtml += '<li onclick="menuClick(\'' + name + '\')" style="font-weight:bold;color:blue;">' + name + '</li>';
            } else {
                menuHtml += '<li onclick="menuClick(\'' + name + '\')">' + name + '</li>';
            }
        }

        document.getElementById("sidebarMenu").innerHTML = menuHtml;

        // Optional output
        document.getElementById("output").innerHTML = "Menu reordered based on usage.";
    }
</script>

</body>
</html>
