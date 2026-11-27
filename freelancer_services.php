
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Service Management</title>

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
        .form-box select {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .service-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 22px;
        }

        .service-card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            box-shadow: 0 2px 8px #ddd;
        }

        .service-card h3 {
            margin-top: 12px;
        }

        .status {
            display: inline-block;
            background: #e1f1e8;
            color: #24734e;
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        .price {
            font-weight: bold;
            color: #176b4a;
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
            <h1>Freelancer Service Management</h1>
            <p>Manage the services offered by freelancers on the platform.</p>
        </div>

        <button class="add-btn" onclick="showForm()">
            + Add Freelancer Service
        </button>
    </div>

    <div class="form-box" id="serviceForm">
        <h2>Add Freelancer Service</h2>

        <form id="addForm">
            <label>Freelancer ID</label>
            <input type="number" id="freelancerId" min="1" required>

            <label>Service ID</label>
            <input type="number" id="serviceId" min="1" required>

            <label>Service Price</label>
            <input type="number" id="servicePrice" min="0" step="0.01" required>

            <label>Availability Status</label>
            <select id="availability" required>
                <option value="">Select Availability</option>
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
            </select>

            <br><br>

            <button type="submit" class="save-btn">Save Service</button>
            <button type="button" onclick="hideForm()">Cancel</button>
        </form>
    </div>

    <input
        type="text"
        class="search"
        id="searchInput"
        placeholder="Search freelancer services..."
        oninput="searchServices()"
    >

    <div class="service-list" id="serviceList">

        <div class="service-card">
            <span class="status">Available</span>
            <h3>Freelancer ID: 101</h3>
            <p>Service ID: 1</p>
            <p class="price">Service Price: $150.00</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="status">Available</span>
            <h3>Freelancer ID: 102</h3>
            <p>Service ID: 2</p>
            <p class="price">Service Price: $200.00</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        </div>

        <div class="service-card">
            <span class="status">Unavailable</span>
            <h3>Freelancer ID: 103</h3>
            <p>Service ID: 3</p>
            <p class="price">Service Price: $100.00</p>
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
        document.getElementById("addForm").reset();
    }

    document.getElementById("addForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let freelancerId = document.getElementById("freelancerId").value;
        let serviceId = document.getElementById("serviceId").value;
        let servicePrice = document.getElementById("servicePrice").value;
        let availability = document.getElementById("availability").value;

        let card = document.createElement("div");
        card.className = "service-card";

        card.innerHTML = `
            <span class="status">${availability}</span>
            <h3>Freelancer ID: ${freelancerId}</h3>
            <p>Service ID: ${serviceId}</p>
            <p class="price">Service Price: $${Number(servicePrice).toFixed(2)}</p>
            <button class="edit-btn" onclick="editService(this)">Edit</button>
            <button class="delete-btn" onclick="deleteService(this)">Delete</button>
        `;

        document.getElementById("serviceList").appendChild(card);

        this.reset();
        hideForm();
    });

    function editService(button) {
        let card = button.parentElement;

        let freelancerId = prompt(
            "Enter Freelancer ID:",
            card.querySelector("h3").textContent.replace("Freelancer ID: ", "")
        );

        if (freelancerId === null || freelancerId.trim() === "" ||
            !Number.isInteger(Number(freelancerId)) || Number(freelancerId) <= 0) {
            return;
        }

        let serviceId = prompt(
            "Enter Service ID:",
            card.querySelector("p").textContent.replace("Service ID: ", "")
        );

        if (serviceId === null || serviceId.trim() === "" ||
            !Number.isInteger(Number(serviceId)) || Number(serviceId) <= 0) {
            return;
        }

        let price = prompt(
            "Enter Service Price:",
            card.querySelector(".price").textContent.replace("Service Price: $", "")
        );

        if (price === null || price.trim() === "" || !Number.isFinite(Number(price)) || Number(price) < 0) {
            return;
        }

        let availability = prompt(
            "Enter Availability (Available or Unavailable):",
            card.querySelector(".status").textContent
        );

        if (availability === null ||
            !["Available", "Unavailable"].includes(availability.trim())) {
            alert("Please enter Available or Unavailable.");
            return;
        }

        card.querySelector("h3").textContent = "Freelancer ID: " + freelancerId;
        card.querySelector("p").textContent = "Service ID: " + serviceId;
        card.querySelector(".price").textContent =
            "Service Price: $" + Number(price).toFixed(2);
        card.querySelector(".status").textContent = availability.trim();
    }

    function deleteService(button) {
        if (confirm("Are you sure you want to delete this service?")) {
            button.parentElement.remove();
        }
    }

    function searchServices() {
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
