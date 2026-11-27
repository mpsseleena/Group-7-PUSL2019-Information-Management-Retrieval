
<?php
// AI Service Management UI
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Service Management</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f8f5;
            color: #263b30;
        }

        header {
            background: #174d38;
            color: white;
            padding: 22px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            font-size: 22px;
        }

        header a {
            color: white;
            text-decoration: none;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        .heading p {
            color: #718078;
            margin-top: 8px;
        }

        button {
            background: #238052;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            background: #174d38;
        }

        .search {
            width: 100%;
            padding: 13px;
            border: 1px solid #d8e3dc;
            border-radius: 7px;
            margin-bottom: 25px;
        }

        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .service-card {
            background: white;
            padding: 24px;
            border-radius: 12px;
            border: 1px solid #e2ebe5;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
        }

        .service-card h3 {
            margin-bottom: 12px;
            color: #174d38;
        }

        .category {
            display: inline-block;
            background: #e3f3e9;
            color: #238052;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 12px;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #718078;
            line-height: 1.5;
            margin-bottom: 18px;
        }

        .delete-btn {
            background: #c94b4b;
            padding: 8px 13px;
        }

        .delete-btn:hover {
            background: #a72e2e;
        }

        .form-box {
            display: none;
            background: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            border: 1px solid #d8e3dc;
        }

        .form-box input,
        .form-box textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0 18px;
            border: 1px solid #d8e3dc;
            border-radius: 6px;
        }

        .form-box label {
            font-weight: bold;
        }

        @media (max-width: 600px) {
            header {
                padding: 20px;
            }

            .container {
                margin-top: 25px;
            }
        }

        .edit-btn {
    margin-right: 12px;
}


header {
    background-color: #176b4a;
    color: white;
    padding: 18px 35px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

header h2 {
    margin: 0;
    font-size: 22px;
}

header nav {
    display: flex;
    align-items: center;
    gap: 25px;
    flex-wrap: wrap;
}

header nav a {
    color: white;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
    padding: 8px 0;
    transition: 0.3s;
}

header nav a:hover {
    color: #c5f0d8;
    text-decoration: underline;
}

    </style>
</head>

<body>


<header>
    <h2>AI Freelancing Platform</h2>

    <nav>
        <a href="index.php">Home</a>
        <a href="ai_services.php">AI Services</a>
        <a href="freelancer_services.php">Freelancer Services</a>
        <a href="project_requirements.php">Project Requirements</a>
    </nav>
</header>


<div class="container">

    <div class="heading">
        <div>
            <h1>AI Service Management</h1>
            <p>Manage and organize the AI services offered on the platform.</p>
        </div>

        <button onclick="showForm()">+ Add New Service</button>
    </div>

    <div class="form-box" id="serviceForm">
        <h2>Add AI Service</h2>

        <form id="addForm">
            <label>Service Name</label>
            <input type="text" id="serviceName"
                   placeholder="Enter service name" required>

            <label>Service Category</label>
            <input type="text" id="serviceCategory"
                   placeholder="Enter category" required>

            <label>Service Description</label>
            <textarea id="serviceDescription"
                      placeholder="Describe the service"
                      required></textarea>

            <button type="submit">Save Service</button>
            <button type="button" onclick="hideForm()">
                Cancel
            </button>
        </form>
    </div>

    <input type="text" class="search" id="searchInput"
           placeholder="Search AI services..."
           oninput="searchServices()">

    <div class="service-list" id="serviceList">

        <div class="service-card">
            <span class="category">Machine Learning</span>
            <h3>Predictive Analytics</h3>
            <p>AI solutions that analyze data and predict future trends.</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="category">Natural Language Processing</span>
            <h3>AI Chatbot Development</h3>
            <p>Development of intelligent chatbots for customer support.</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="category">Computer Vision</span>
            <h3>Image Recognition</h3>
            <p>AI-powered image analysis and object detection solutions.</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        </div>

    </div>

</div>

<script>
    function showForm() {
        document.getElementById("serviceForm").style.display = "block";
    }

    function hideForm() {
        document.getElementById("serviceForm").style.display = "none";
    }

    document.getElementById("addForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let name = document.getElementById("serviceName").value;
        let category = document.getElementById("serviceCategory").value;
        let description = document.getElementById("serviceDescription").value;

        let card = document.createElement("div");
        card.className = "service-card";

        let categoryLabel = document.createElement("span");
        categoryLabel.className = "category";
        categoryLabel.textContent = category;

        let title = document.createElement("h3");
        title.textContent = name;

        let paragraph = document.createElement("p");
        paragraph.textContent = description;

        let deleteButton = document.createElement("button");
        deleteButton.className = "delete-btn";
        deleteButton.textContent = "Delete";
        deleteButton.onclick = function() {
            deleteService(deleteButton);
        };


        let editButton = document.createElement("button");
        editButton.textContent = "Edit";
        editButton.className = "edit-btn";

        editButton.onclick = function() {
        editService(editButton);
        };


card.append(categoryLabel, title, paragraph, editButton, deleteButton);
        document.getElementById("serviceList").appendChild(card);

        this.reset();
        hideForm();
    });

    function deleteService(button) {
        if (confirm("Are you sure you want to delete this service?")) {
            button.parentElement.remove();
        }
    }

    function editService(button) {
    let card = button.parentElement;

    let newName = prompt("Enter new service name:", card.querySelector("h3").textContent);

    if (newName === null || newName.trim() === "") {
        return;
    }

    let newCategory = prompt("Enter new category:", card.querySelector(".category").textContent);

    if (newCategory === null || newCategory.trim() === "") {
        return;
    }

    let newDescription = prompt("Enter new description:", card.querySelector("p").textContent);

    if (newDescription === null || newDescription.trim() === "") {
        return;
    }

    card.querySelector("h3").textContent = newName;
    card.querySelector(".category").textContent = newCategory;
    card.querySelector("p").textContent = newDescription;
}

    function searchServices() {
        let search = document.getElementById("searchInput").value.toLowerCase();
        let cards = document.querySelectorAll(".service-card");

        cards.forEach(function(card) {
            card.style.display = card.textContent.toLowerCase().includes(search)
                ? "block" : "none";
        });
    }
</script>

</body>
</html>
