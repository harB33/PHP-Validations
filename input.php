<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAJO: Fans That Cools You</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
    <img src="./HajoLogo.png" alt="" class="logo">
    <form action="output.php" method="post">
        <div class="field-group">
            <div class="field">
                <input type="text" id="first_name" name="first_name" placeholder=" " aria-label="First Name" required>
                <span class="field-label">First Name</span>
            </div>
            
            <div class="field">
                <input type="text" id="last_name" name="last_name" placeholder=" " aria-label="Last Name" required>
                <span class="field-label">Last Name</span>
            </div>
        </div>

        <div class="field-row-three">
            <div class="field">
                <input type="email" id="email" name="email" placeholder=" " aria-label="Email" required>
                <span class="field-label">Email</span>
            </div>
            
            <div class="field">
                <input type="number" id="phone" name="phone" placeholder=" " aria-label="Phone Number">
                <span class="field-label">Phone Number</span>
            </div>
            
            <div class="field">
                <input type="text" id="address" name="address" placeholder=" " aria-label="Address">
                <span class="field-label">Address</span>
            </div>
        </div>
        <h1 class="section-title">JisuLife</h1>
        <div class="card-grid">
			<div class="card-item">
			<input type="checkbox" id="card1" name="items[]" value="fan1" class="card-input">
			<label for="card1" class="card-label">
				<img src="./ultra2-main_1.jpg" alt="Fan 1">
				<div>
					<h1>JisuLife Handheld Fan Ultra2</h1>
					<p>2,500</p>
				</div>
			</label>
			</div>
			<div class="card-item">
				<input type="checkbox" id="card2" name="items[]" value="fan2" class="card-input">
				<label for="card2" class="card-label">
					<img src="./handheldfanultra1-main_1.jpg" alt="Fan 2">
					<div>
						<h1>JisuLife Handheld Fan Ultra1</h1>
						<p>2,000</p>
					</div>
				</label>
			</div>
			<div class="card-item">
				<input type="checkbox" id="card3" name="items[]" value="fan3" class="card-input">
				<label for="card3" class="card-label">
					<img src="./pro1s-2025-main_3.jpg" alt="Fan 3">
					<div>
						<h1>JisuLife Handheld Fan Pro1S</h1>
						<p>1,500</p>
					</div>
				</label>
			</div>
		</div>
		<h1 class="section-title">GOOJODOQ</h1>
		<div class="card-grid">
			<div class="card-item">
				<input type="checkbox" id="card4" name="items[]" value="gfs003" class="card-input">
				<label for="card4" class="card-label">
					<img src="./GFS003.png" alt="Fan 1">
					<div>
						<h1>GOOJODOQ Foldable Portable Fan GFS003</h1>
						<p>1,750</p>
					</div>
				</label>
			</div>
			<div class="card-item">
				<input type="checkbox" id="card5" name="items[]" value="gfs006" class="card-input">
				<label for="card5" class="card-label">
					<img src="./GFS006.png" alt="Fan 2">
					<div>
						<h1>GOOJODOQ Portable Fan High Speed GFS006</h1>
						<p>1,500</p>
					</div>
				</label>
			</div>
			<div class="card-item">
				<input type="checkbox" id="card6" name="items[]" value="gfs007" class="card-input">
				<label for="card6" class="card-label">
					<img src="./GFS007.png" alt="Fan 3">
					<div>
						<h1>GOOJODOQ High Speed Mini Fan GFS007</h1>
						<p>1,250</p>
					</div>
				</label>
			</div>
		</div>
        <button type="submit" name="submit" class="cart-icon" aria-label="Submit order">
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart-icon lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
            <span id="item-count" class="count-badge">0</span>
        </button>
    </form>
    </div>
    <script>
        const checkboxes = document.querySelectorAll('.card-input');
        const countLabel = document.getElementById('item-count');
        function updateCount() {
            const selected = Array.from(checkboxes).filter(chk => chk.checked).length;
            countLabel.textContent = selected;
        }
        checkboxes.forEach(chk => chk.addEventListener('change', updateCount));
        updateCount();
    </script>
</body>
</html>