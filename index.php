<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Monitoring System</title>
    <style>
  body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
 <h2>Healthcare Monitoring System Registration</h2>
 <form>
    <div class ="personal">
    <h3>1. Personal Information</h3>
    <label for ="childName">Child's Full Name:</label>
    <input type ="text" id ="childName" name ="childName" required>

    <label for ="dob">Date of Birth:</label>
    <input type ="date" id ="dob" name ="dob" required>

    <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    <label for ="parentName">Parent/Guardian's Full Name:</label>
    <input type ="text" id ="parentName" name ="parentName" required>

    <label for ="contact">Contact Number:</label>
    <input type ="tel" id ="contact" name ="contact" required>

    <label for ="email">Email Address:</label>
    <input type ="email" id ="email" name ="email" required>
    </div>
    <div class ="address">
    <h3>2.Address Information</h3>
    <label for ="street">Street Address:</label>
    <input type ="text" id ="street" name ="street" required>

    <label for ="city">City:</label>
    <input type ="text" id ="city" name ="city" required>

    <label for ="province">Province:</label>
    <input type ="text" id ="province" name ="province" required>

    <label for ="postal">Postal Code:</label>
    <input type ="text" id ="postal" name ="postal" required>

    <label for ="country">Country:</label>
    <input type ="text" id ="country" name ="country" required>
    </div>
    <div class ="health">
    <h3>3.Health Information</h3>
    <label for ="weight">Current Weight:</label>
    <input type ="number" id ="weight" name ="weight" required>

    <label for ="height">Height:</label>
    <input type ="number" id ="height" name ="height" required>

    <label for="lastCheckup">Date of Last Health Check-up:</label>
    <input type="date" id="lastCheckup" name="lastCheckup">

    <label for="healthConditions">Health Conditions (if any):</label>
    <textarea id="healthConditions" name="healthConditions"></textarea>

    <label for="nutritionalNeeds">Nutritional Needs/Allergies (if any):</label>
    <textarea id="nutritionalNeeds" name="nutritionalNeeds"></textarea>
    </div>
    <div class ="needs">
    <h3>4. Monitoring and Support Needs</h3>
    <label for="supportNeeded">Type of Support Needed:</label>
    <textarea id="supportNeeded" name="supportNeeded"></textarea>

    <label>Preferred Communication Method:</label>
    <select name="communicationMethod">
        <option value="phone">Phone</option>
        <option value="email">Email</option>
        <option value="inPerson">In-person</option>
    </select>
   </div>
   <div class="checkbox-container">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">I consent to share data for research/health monitoring purposes.</label>
                </div>
    <div class ="emergency">
        <h3>5. Emergency Contacts</h3>
        <label for="emergencyName">Emergency Contact Name:</label>
        <input type="text" id="emergencyName" name="emergencyName" required>

        <label for="relationship">Relationship to Child:</label>
        <input type="text" id="relationship" name="relationship" required>

        <label for="emergencyNumber">Emergency Contact Number:</label>
        <input type="tel" id="emergencyNumber" name="emergencyNumber" required>
    </div>
    <div class ="comm">
 <h3>6. Additional Comments</h3>
        <textarea id="additionalComments" name="additionalComments" placeholder="Any other relevant information or concerns..."></textarea>

        <button type="submit">Submit Registration</button>
    </div>
 </form>
</body>
</html>