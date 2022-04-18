<?php
require("script.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TW Knowledge Management System - Document Search</title>
  <link rel="stylesheet" type="text/css" href="style.css" />


  <form method="post">
    <header>
      <div>
        <h1>Taylor Woodrow Knowledge Management</h1>
      </div>
</head>

<div>
  <img src="BuildOnTrust.png" alt="Build On Trust logo" id="trust" />
  <img src="tw_logo.png" alt="Taylor Woodrow logo" id="logo">
</div>

</header>
<h1 style="text-align:center; font-size: 20px; color:red"><?php
                                                          if (isset($_POST['search'])) {
                                                            echo "We have found " . $count_rows . " results for your research";
                                                          }
                                                          ?></h2>

  <body>
    <section class="Object_Explorer">
      <ul>
        <div>
          <li><b>Project Name</b></li>
          <select name="projectname">
            <option value="">-Select-</option><?php
                                              $db1 = new SQLite3('C:\xampp\htdocs\stage 3 program\program\sample.db');
                                              $sql1 = "SELECT * FROM metadata";
                                              $result1 = $db->query($sql1);
                                              while ($row1 = $result1->fetchArray(SQLITE3_ASSOC)) : ?>
              <option value="<?php echo $row1['project'] ?>"><?php echo $row1['project']; ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        <br>
        <div>
          <b>Work Type</b>
          <select name="worktype">
            <option value="">-Select-</option>
            <option value="Green Technologies">Green Technologies</option>
            <option value="New Road / Bypass">New Road / Bypass</option>
            <option value="Decommissioning">Decommissioning</option>
            <option value="Civils Infrastructure">Civils Infrastructure</option>
            <option value="Station - Upgrade">Station - Upgrade</option>
            <option value="Motorway Junction">Motorway Junction</option>
            <option value="Smart Motorway">Smart Motorway</option>
            <option value="Station - New">Station - New</option>
            <option value="Depot / Sidings">Depot / Sidings</option>
            <option value="Sub-station">Sub-station</option>
            <option value="OHL Tower">OHL Tower</option>
            <option value="Underground">Underground</option>
            <option value="Basement">Basement</option>
            <option value="Track renewal">Track renewal</option>
          </select>
        </div>
        <br>
        <div>
          <b>Project Code</b>
          <select name="projectcode">
            <option value="">-Select-</option>
            <option value="TBD1">TBD1</option>
            <option value="TBD2">TBD2</option>
            <option value="TBD3">TBD3</option>
            <option value="TBD4">TBD4</option>
            <option value="TBD5">TBD5</option>
            <option value="TBD6">TBD6</option>
            <option value="TBD7">TBD7</option>
            <option value="TBD8">TBD8</option>
            <option value="TBD9">TBD9</option>
            <option value="TBD10">TBD10</option>
            <option value="TBD11">TBD11</option>
            <option value="TBD12">TBD12</option>
            <option value="TBD13">TBD13</option>
            <option value="TBD14">TBD14</option>
            <option value="TBD15">TBD15</option>
            <option value="TBD16">TBD16</option>
            <option value="TBD17">TBD17</option>
            <option value="TBD18">TBD18</option>
            <option value="TBD19">TBD19</option>
            <option value="TBD20">TBD20</option>
            <option value="TBD21">TBD21</option>
            <option value="TBD22">TBD22</option>
          </select>
        </div>
        <br>
        <div>
          <b>Client</b>
          <select name="client">
            <option value="">-Select-</option>
            <option value="Amey Cespa">Amey Cespa</option>
            <option value="East Sussex CC">East Sussex CC</option>
            <option value="Magnox">Magnox</option>
            <option value="Sita">Sita</option>
            <option value="Crossrail">Crossrail</option>
            <option value="Highways England">Highways England</option>
            <option value="High Speed 2">High Speed 2</option>
            <option value="LO">LO</option>
            <option value="London Underground">London Underground</option>
            <option value="LU/HCC">LU/HCC</option>
            <option value="Welsh Assembly Gov">Welsh Assembly Gov</option>
            <option value="Tramlink Nottingham">Tramlink Nottingham</option>
            <option value="Abellio">Abellio</option>
            <option value="Network Rail">Network Rail</option>
            <option value="Bombardier">Bombardier</option>
            <option value="Sellafield Ltd">Sellafield Ltd</option>
            <option value="BP">BP</option>
            <option value="Exxon">Exxon</option>
            <option value="National Grid">National Grid</option>
            <option value="National Grid">National Grid</option>
            <option value="County Councils">County Councils</option>
          </select>
        </div>
        <br>
        <div>
          <b>Material / Other</b>
          <select name="material">
            <option value="">-Select-</option>
            <option value="GENERAL">GENERAL</option>
            <option value="Action">Action</option>
            <option value="Concrete">Concrete</option>
            <option value="Reinforced concrete">Reinforced concrete</option>
            <option value="steel">steel</option>
            <option value="timber">timber</option>
            <option value="masonry">masonry</option>
            <option value="fixings">fixings</option>
            <option value="geotechnical">geotechnical</option>
            <option value="investigations">investigations</option>
            <option value="software">software</option>
            <option value="plant">plant</option>
            <option value="Props">Props</option>
            <option value="Geosynthetics">Geosynthetics</option>
            <option value="Geotextile">Geotextile</option>
            <option value="Geogrid">Geogrid</option>
            <option value="Gabion baskets">Gabion baskets</option>
            <option value="Steal beam">Steal beam</option>
            <option value="Steel tube">Steel tube</option>
            <option value="Steel H-pile">Steel H-pile</option>
            <option value="Anchors">Anchors</option>
          </select>
        </div>
        <br>
        <div>
          <b>Discipline</b>
          <select name="discipline">
            <option value="">-Select-</option>
            <option value="Procurement">Procurement</option>
            <option value="Design">Design</option>
            <option value="Engineering">Engineering</option>
            <option value="Surveying">Surveying</option>
            <option value="Quality Control">Quality Control</option>
            <option value="Health & Safety">Health & Safety</option>
            <option value="Temporary Works">Temporary Works</option>
            <option value="Pre construction">Pre construction</option>
            <option value="Handover">Handover</option>
            <option value="Post construction">Post construction</option>
            <option value="Qaulity Assurance ">Qaulity Assurance</option>
            <option value="Operation">Operation</option>
            <option value="Planning">Planning</option>
          </select>
        </div>
        <br>
        <div>
          <b>Activity / Element</b>
          <select name="element">
            <option value="">-Select-</option>
            <option value="Piling">Piling</option>
            <option value="Reinforcement">Reinforcement</option>
            <option value="Steel work">Steel work</option>
            <option value="RC (Reinforced Concrete)">RC (Reinforced Concrete)</option>
            <option value="Testing">Testing</option>
            <option value="Investigations">Investigations</option>
            <option value="Working platform">Working platform</option>
            <option value="Paving">Paving</option>
            <option value="Drainage">Drainage</option>
            <option value="Facade retention">Facade retention</option>
            <option value="Needling">Needling</option>
            <option value="Gantries ( ? Road / Rail )">Gantries ( ? Road / Rail )</option>
            <option value="Propping">Propping</option>
            <option value="Sloping formwork">Sloping formwork</option>
            <option value="Horizontal formwork">Horizontal formwork</option>
            <option value="Vertical formwork">Vertical formwork</option>
            <option value="Access scaffold">Access scaffold</option>
            <option value="Scaffold loading bay">Scaffold loading bay</option>
            <option value="Edge protection">Edge protection</option>
            <option value="Hoarding">Hoarding</option>
            <option value="Service crossing">Service crossing</option>
            <option value="Temporary roof">Temporary roof</option>
            <option value="Trench and excavation support">Trench and excavation support</option>
            <option value="Foundation (this includes outrigger, site office, silo base, etc)">Foundation (this includes outrigger, site office, silo base, etc)</option>
            <option value="Horizontal and inclined propping">Horizontal and inclined propping</option>
            <option value="Underpinning">Underpinning</option>
            <option value="Ground anchor">Ground anchor</option>
            <option value="Haul road">Haul road</option>
            <option value="Retaining wall">Retaining wall</option>
            <option value="Tower crane base">Tower crane base</option>
            <option value="Piling/crane platform">Piling/crane platform</option>
            <option value="Cofferdam">Cofferdam</option>
            <option value="Bridge launching">Bridge launching</option>
            <option value="Heavy lift systems">Heavy lift systems</option>
            <option value="Jacking">Jacking</option>
            <option value="Hoist anchorage">Hoist anchorage</option>
            <option value="Suspended slab check">Suspended slab check</option>
            <option value="Earthworks">Earthworks</option>
            <option value="Uniclass Codes">Uniclass Codes</option>
            <option value="Substructure systems">Substructure systems</option>
            <option value="Bridge abutment and pier systems">Bridge abutment and pier systems</option>
            <option value="Fence systems">Fence systems</option>
            <option value="Fixed pedestrian barrier systems">Fixed pedestrian barrier systems</option>
            <option value="Fixed traffic and protective barrier systems">Fixed traffic and protective barrier systems</option>
            <option value="Wall cladding systems">Wall cladding systems</option>
            <option value="Bridge deck systems">Bridge deck systems</option>
            <option value="Kerb and traffic separation systems">Kerb and traffic separation systems</option>
            <option value="Surface and wastewater drainage collection systems">Surface and wastewater drainage collection systems</option>
            <option value="Drainage storage, treatment and disposal systems">Drainage storage, treatment and disposal systems</option>
            <option value="Vessel and trench systems">Vessel and trench systems</option>
            <option value="External lighting systems">External lighting systems</option>
            <option value="General fittings, furnishings and equipment (FF&E) systems">General fittings, furnishings and equipment (FF&E) systems</option>
            <option value="Artificially supported flora systems">Artificially supported flora systems</option>
            <option value="Roof and balcony covering and finish systems">Roof and balcony covering and finish systems</option>
            <option value="Ventilation systems">Ventilation systems</option>
            <option value="Crane and hoist systems">Crane and hoist systems</option>
            <option value="Setting Out & Surveying">Setting Out & Surveying</option>
            <option value="Slip Forming - Vertical">Slip Forming - Vertical</option>
            <option value="Steel Frame">Steel Frame</option>
            <option value="External Envelope (Roofing, Cladding, Curtain Walling)">External Envelope (Roofing, Cladding, Curtain Walling)</option>
            <option value="Mechanical, Electrical, Fire, Public Health, CCTV, Comms, Security (M&E)">Mechanical, Electrical, Fire, Public Health, CCTV, Comms, Security (M&E)</option>
            <option value="Highways (Motorway Communication & Lighting)">Highways (Motorway Communication & Lighting)</option>
            <option value="Highways (Slip Forming - Horizontal)">Highways (Slip Forming - Horizontal)</option>
            <option value="Traffic Management">Traffic Management</option>
            <option value="Permanent Way">Permanent Way</option>
            <option value="Track Systems/Depots">Track Systems/Depots</option>
            <option value="Ground Investigation (GI)">Ground Investigation (GI)</option>
            <option value="Earthworks (Cut and Fill)">Earthworks (Cut and Fill)</option>
            <option value="Piled foundations">Piled foundations</option>
            <option value="Shallow (Pad) foundations ">Shallow (Pad) foundations </option>
            <option value="Raft foundations">Raft foundations</option>
            <option value="Slope regrading (Cutting/Embankment)">Slope regrading (Cutting/Embankment)</option>
            <option value="Deep Excavation">Deep Excavation</option>
            <option value="Reinforced earthworks">Reinforced earthworks</option>
            <option value="Gabion wall">Gabion wall</option>
            <option value="Soil nailing">Soil nailing</option>
            <option value="Soil/Rock anchor">Soil/Rock anchor</option>
            <option value="Propping">Propping</option>
          </select>
        </div>
        <br>
        <div>
          <b>Sector</b>
          <select name="sector">
            <option value="">-Select-</option>
            <option value="Energy - Oil">Energy - Oil</option>
            <option value="Energy - Gas">Energy - Gas</option>
            <option value="Energy - Nuclear">Energy - Nuclear</option>
            <option value="Transport - Rail - Heavy">Transport - Rail - Heavy</option>
            <option value="Transport - Rail - High Speed">Transport - Rail - High Speed</option>
            <option value="Transport - Rail - Underground">Transport - Rail - Underground</option>
            <option value="Transport - Rail - Light">Transport - Rail - Light</option>
            <option value="Transport - Highways">Transport - Highways</option>
            <option value="Transport - Bridges">Transport - Bridges</option>
            <option value="Transport - Tunnels">Transport - Tunnels</option>
            <option value="Transport - Ports">Transport - Ports</option>
            <option value="Transport - Airports">Transport - Airports</option>
            <option value="Buildings - Residential">Buildings - Residential</option>
            <option value="Buildings - Commercial">Buildings - Commercial</option>
            <option value="Buildings - Healthcare">Buildings - Healthcare</option>
            <option value="Water">Water</option>
            <option value="Energy - Wind">Energy - Wind</option>
            <option value="Energy - Power Transmission">Energy - Power Transmission</option>
          </select>
        </div>



        <br>
        <div>
          <b>Project Start Date</b>
          <select name="start">
            <option value="">-Select-</option>
          </select>
        </div>
        <br>
        <div>
          <b>Project Completion Date</b>
          <select name="completion">
            <option value="">-Select-</option>
          </select>
        </div>
        <br>
        <div>
          <b>Information Segments</b>
          <select name="info">
            <option value="">-Select-</option>
            <option value="Case Study">Case Study</option>
            <option value="Lessons Learned">Lessons Learned</option>
            <option value="Photos & Videos">Photos & Videos</option>
            <option value="Internal / External Communication">Internal / External Communication</option>
            <option value="Project reports & KPI">Project reports & KPI</option>
            <option value="Costs">Costs</option>
            <option value="People with Special skills">HS2 - OOC Station</option>
            <option value="Design Guide">Design Guide</option>
            <option value="Drawing">Drawing</option>
            <option value="Calculation">Calculation</option>
            <option value="Report">Report</option>
            <option value="Spreadsheet">Spreadsheet</option>
            <option value="External Knowledge Area ">External Knowledge Area </option>
            <option value="3D Model">3D Model</option>
            <option value="2D Model">2D Model</option>
          </select>
        </div>
        </div>
        <br>


        <br>
        <div>
          <label>Tag / Keyword</label>
          <br>
          <input type="text" name="tag" value="">
          <br>

          <div class="search">
            <br>
            <input type="submit" value="search" name="search" id="submit">
          </div>
          <div class="refresh">
            <br>
            <input type="button" value="Refresh" onClick="window.location.reload();" id="refresh"></button>
          </div>
    </section>


    <table id="Table">
      <tr>

        <th>File Name</th>
        <th>Activity / Element</th>
        <th>Project Name</th>
        <th>Work Type</th>
        <th>Information Segment</th>
        <th>Download Link</th>
      </tr>
      <tbody>

        <?php
        if (isset($_POST['search'])) : ?>
      <tbody>

        <?php while ($row = $result->fetchArray(SQLITE3_ASSOC)) : ?>
          <tr>
            <td><?php echo $row['project'] ?></td>
            <td><?php echo $row['element'] ?></td>
            <td><?php echo $row['document'] ?></td>
            <td><?php echo $row['worktype'] ?></td>
            <td><?php echo $row['segment'] ?></td>
            <td> <a href="ae.txt" download>Download</a></td>


          </tr>
        <?php endwhile; ?>
      <?php endif; ?>


    </table>


  </body>

</html>