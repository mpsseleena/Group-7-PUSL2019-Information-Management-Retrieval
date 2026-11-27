
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Requirement Management</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f7f5;
            color: #333;
        }

        nav {
            background-color: #176b4a;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            margin: 0;
        }

        
nav div {
    display: flex;
    align-items: center;
    gap: 25px;
    flex-wrap: wrap;
}

nav a {
    color: white;
    text-decoration: none;
    margin-left: 0;
    font-size: 15px;
    font-weight: 500;
    padding: 8px 0;
    transition: 0.3s;
}

nav a:hover {
    color: #c5f0d8;
    text-decoration: underline;
}

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .heading h1 {
            margin-bottom: 8px;
        }

        .heading p {
            color: #666;
        }

        button {
            border: none;
            padding: 11px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .add-btn, .save-btn {
            background-color: #27845c;
            color: white;
        }

        .edit-btn {
            background-color: #27845c;
            color: white;
            margin-right: 8px;
        }

        .delete-btn {
            background-color: #c84b58;
            color: white;
        }

        .search {
            width: 100%;
            padding: 14px;
            margin: 20px 0;
            border: 1px solid #ddd;
            border-radius: 7px;
            font-size: 15px;
        }

        .form-box {
            display: none;
            background: white;
            padding: 22px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px #ddd;
        }

        .form-box h2 {
            margin-top: 0;
        }

        .form-box label {
            display: block;
            margin: 12px 0 6px;
            font-weight: bold;
        }

        .form-box input,
        .form-box select,
        .form-box textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-family: Arial, sans-serif;
        }

        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 22px;
        }

        .service-card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #ddd;
        }

        .level {
            display: inline-block;
            background: #e1f1e8;
            color: #24734e;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .heading {
                align-items: flex-start;
                flex-direction: column;
            }

            nav {
                flex-direction: column;
                gap: 12px;
            }
        }
    </style>
</head>

<body>


<nav>
    <h2>AI Freelancing Platform</h2>

    <div>
        <a href="index.php">Home</a>
        <a href="ai_services.php">AI Services</a>
        <a href="freelancer_services.php">Freelancer Services</a>
        <a href="project_requirements.php">Project Requirements</a>
    </div>
</nav>


<div class="container">

    <div class="heading">
        <div>
            <h1>Project Requirement Management</h1>
            <p>Manage the skills and requirements needed for projects.</p>
        </div>

        <button class="add-btn" onclick="showForm()">
            + Add Project Requirement
        </button>
    </div>

    <div class="form-box" id="requirementForm">
        <h2>Add Project Requirement</h2>

        <form id="addForm">

            <label>Project ID</label>
            <input type="number" id="projectId" min="1" required>

            <label>Skill ID</label>
            <input type="number" id="skillId" min="1" required>

            <label>Requirement Description</label>
            <textarea id="description" rows="3" required></textarea>

            <label>Required Level</label>
            <select id="requiredLevel" required>
                <option value="">Select Required Level</option>
                <option value="Beginner">Beginner</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Advanced">Advanced</option>
                <option value="Expert">Expert</option>
            </select>

            <br><br>

            <button type="submit" class="save-btn">Save Requirement</button>
            <button type="button" onclick="hideForm()">Cancel</button>

        </form>
    </div>

    <input
        type="text"
        class="search"
        id="searchInput"
        placeholder="Search project requirements..."
        oninput="searchRequirements()"
    >

    <div class="service-list" id="requirementList">

        <div class="service-card">
            <span class="level">Advanced</span>
            <h3>Project ID: 201</h3>
            <p>Skill ID: 1</p>
            <p>Requirement: Machine learning model development</p>
            <button class="edit-btn" onclick="editRequirement(this)">Edit</button>
            <button class="delete-btn" onclick="deleteRequirement(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="level">Intermediate</span>
            <h3>Project ID: 202</h3>
            <p>Skill ID: 2</p>
            <p>Requirement: Develop an AI chatbot</p>
            <button class="edit-btn" onclick="editRequirement(this)">Edit</button>
            <button class="delete-btn" onclick="deleteRequirement(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="level">Beginner</span>
            <h3>Project ID: 203</h3>
            <p>Skill ID: 3</p>
            <p>Requirement: Perform basic data analysis</p>
            <button class="edit-btn" onclick="editRequirement(this)">Edit</button>
            <button class="delete-btn" onclick="deleteRequirement(this)">Delete</button>
        </div>

    </div>
</div>

<script>

    function showForm() {
        document.getElementById("requirementForm").style.display = "block";
    }

    function hideForm() {
        document.getElementById("requirementForm").style.display = "none";
        document.getElementById("addForm").reset();
    }

    document.getElementById("addForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let projectId = document.getElementById("projectId").value;
        let skillId = document.getElementById("skillId").value;
        let description = document.getElementById("description").value;
        let level = document.getElementById("requiredLevel").value;

        let card = document.createElement("div");
        card.className = "service-card";

        let levelLabel = document.createElement("span");
        levelLabel.className = "level";
        levelLabel.textContent = level;

        let title = document.createElement("h3");
        title.textContent = "Project ID: " + projectId;

        let skill = document.createElement("p");
        skill.textContent = "Skill ID: " + skillId;

        let requirement = document.createElement("p");
        requirement.textContent = "Requirement: " + description;

        let editButton = document.createElement("button");
        editButton.className = "edit-btn";
        editButton.textContent = "Edit";
        editButton.onclick = function() {
            editRequirement(editButton);
        };

        let deleteButton = document.createElement("button");
        deleteButton.className = "delete-btn";
        deleteButton.textContent = "Delete";
        deleteButton.onclick = function() {
            deleteRequirement(deleteButton);
        };

        card.append(levelLabel, title, skill, requirement, editButton, deleteButton);

        document.getElementById("requirementList").appendChild(card);

        this.reset();
        hideForm();
    });

    function editRequirement(button) {
        let card = button.parentElement;

        let projectId = prompt(
            "Enter Project ID:",
            card.querySelector("h3").textContent.replace("Project ID: ", "")
        );

        if (projectId === null || projectId.trim() === "" ||
            !Number.isInteger(Number(projectId)) || Number(projectId) <= 0) {
            return;
        }

        let skillId = prompt(
            "Enter Skill ID:",
            card.querySelector("p").textContent.replace("Skill ID: ", "")
        );

        if (skillId === null || skillId.trim() === "" ||
            !Number.isInteger(Number(skillId)) || Number(skillId) <= 0) {
            return;
        }

        let description = prompt(
            "Enter Requirement Description:",
            card.querySelectorAll("p")[1].textContent.replace("Requirement: ", "")
        );

        if (description === null || description.trim() === "") {
            return;
        }

        let level = prompt(
            "Enter Required Level (Beginner, Intermediate, Advanced or Expert):",
            card.querySelector(".level").textContent
        );

        if (level === null ||
            !["Beginner", "Intermediate", "Advanced", "Expert"].includes(level.trim())) {
            alert("Please enter a valid required level.");
            return;
        }

        card.querySelector("h3").textContent = "Project ID: " + projectId;
        card.querySelector("p").textContent = "Skill ID: " + skillId;
        card.querySelectorAll("p")[1].textContent = "Requirement: " + description;
        card.querySelector(".level").textContent = level.trim();
    }

    function deleteRequirement(button) {
        if (confirm("Are you sure you want to delete this requirement?")) {
            button.parentElement.remove();
        }
    }

    function searchRequirements() {
        let searchValue = document.getElementById("searchInput").value.toLowerCase();
        let cards = document.querySelectorAll(".service-card");

        cards.forEach(function(card) {
            let cardText = card.textContent.toLowerCase();
            card.style.display = cardText.includes(searchValue) ? "block" : "none";
        });
    }

</script>

</body>
</html>
