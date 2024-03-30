<div id="container">
    <!-- ------------Patient Form------------ -->
    <div class="form" id="patientDlsForm">
        <div class="formup">
            <h3>Enter Patient Details</h3>
            <div id="corssdiv">
                <i id="cross2" class="fa-solid fa-x"></i>
            </div>
        </div>
        <form action="submit.php" method="post" class="patientForm">

            <!-- visible area -->
            <div id="visible">
                <input type="text" name="name" placeholder="Enter Patient Name" required>
                <input type="number" name="number" placeholder="Enter Phone number" required>
                <input type="text" name="dctrName" placeholder="Enter Doctor Name" required>
                <input type="text" name="reason" placeholder="Reason">
                <div class="radioDiv">
                    <div class="radioDivinp">
                        <input type="radio" name="gender" value="male" id="male" required>
                        <label for="male">Male</label>
                    </div>
                    <div class="radioDivinp">
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="female">Female</label>
                    </div>
                    <div class="radioDivinp">
                        <input type="radio" name="gender" value="others" id="others">
                        <label for="others">Others</label>
                    </div>
                </div>
                <div class="checkBoxDiv">
                    <div class="checkbox">
                        <input type="checkbox" id="recovered" name="recovered" value="Recovered">
                        <label for="recovered">Recovered</label>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" id="paid" name="paid" value="Paid">
                        <label for="paid">Paid</label>
                    </div>
                </div>
                <div class="options" required>
                    <label for="dept">Select Department:</label>
                    <select id="dept" name="dept" required>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Outpatient">Outpatient</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <!-- invisible are that appire while checked paid -->
            <div id="invsbl" class="invisible displayNone">
                <input type="number" id="billno" name="billno" placeholder="Bill No">
                <input type="number" id="amount" name="amount" placeholder="Amount">
                <input type="number" id="discount" name="discount" placeholder="Discount">
                <input type="number" id="netAmount" name="netAmount" disabled placeholder="Net Amount">
            </div>
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
    <!-- ------------Patient Form------------ -->
</div>


<!-- ------------Filter Form------------ -->

<div class="form " id="filterForm">
    <div class="formup formupFilter">
        <h1>Filter</h1>
        <div id="corssdivFilter">
            <i id="cross3" class="fa-solid fa-x"></i>
        </div>
    </div>
    <div class="filterUpper">
        <input type="radio" name="paidUnpaid" id="filterPaid" value="Paid">
        <label for="filterPaid">Paid</label>
        <input type="radio" name="paidUnpaid" id="filterUnpaid" value="UnPaid">
        <label for="filterUnpaid">Unpaid</label>
    </div>

    <div>
        <input type="radio" name="recoveredUnrecovered" id="filterRecovered" value="recovered">
        <label for="filterRecovered">Recovered</label>
    </div>
    <div>
        <input type="radio" name="recoveredUnrecovered" id="filterUnrecovered" value="unrecovered">
        <label for="filterUnrecovered">Not recovered</label>
    </div>
    <button class="btn" id="apply">Apply</button>
</div>