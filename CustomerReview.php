<style>
.feedback-container {
  background-color: #fbf3d5;
  display: flex;
  gap: 20px;
  font-weight: 600;
}

.sidebar-image {
  aspect-ratio: 0.08;
  object-fit: auto;
  object-position: center;
  width: 149px;
  max-width: 100%;
}

.main-content {
  align-self: start;
  display: flex;
  margin-top: 27px;
  flex-direction: column;
  flex-grow: 1;
  flex-basis: 0;
  width: fit-content;
  padding: 0 20px;
}

.continue-shopping {
  color: #1e1e1e;
  font: 25px Poppins, sans-serif;
}

.feedback-form {
  align-self: center;
  display: flex;
  margin-top: 76px;
  width: 100%;
  max-width: 1082px;
  flex-direction: column;
  font-size: 26px;
  color: #1c1c1c;
}

.feedback-title {
  color: #000;
  text-align: center;
  align-self: center;
  font: 45px Roboto, sans-serif;
}

.form-label {
  font-family: Roboto, sans-serif;
  margin-top: 58px;
}

.rating-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 10px;
  align-items: start;
  color: #858585;
  justify-content: center;
  padding: 31px 26px;
  font: 500 24px Roboto, sans-serif;
}

.package-number-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 4px;
  height: 80px;
}

.package-details-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  display: flex;
  margin-top: 4px;
  gap: 0;
  font-size: 24px;
  color: #858585;
  font-weight: 500;
}

.input-placeholder {
  font-family: Roboto, sans-serif;
  justify-content: center;
  align-self: start;
  margin-top: 16px;
  padding: 10px;
}

.scale-rating-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 4px;
  height: 80px;
}

.problems-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  align-items: start;
  color: #858585;
  padding: 16px 24px 90px;
  font: 500 24px Roboto, sans-serif;
}

.suggestions-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 8px;
  align-items: start;
  color: #858585;
  padding: 26px 27px 127px;
  font: 500 24px Roboto, sans-serif;
}

.product-images-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 5px;
  height: 268px;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

@media (max-width: 991px) {
  .feedback-container {
    flex-wrap: wrap;
  }

  .sidebar-image {
    display: none;
  }

  .main-content {
    max-width: 100%;
  }

  .continue-shopping {
    max-width: 100%;
  }

  .feedback-form {
    max-width: 100%;
    margin-top: 40px;
  }

  .feedback-title {
    max-width: 100%;
    font-size: 40px;
  }

  .form-label {
    max-width: 100%;
    margin-top: 40px;
  }

  .rating-input {
    max-width: 100%;
    padding: 0 20px;
  }

  .package-number-input {
    max-width: 100%;
  }

  .package-details-input {
    max-width: 100%;
    flex-wrap: wrap;
  }

  .scale-rating-input {
    max-width: 100%;
  }

  .problems-input {
    max-width: 100%;
    padding: 0 20px;
  }

  .suggestions-input {
    max-width: 100%;
    padding: 0 20px 40px;
  }

  .product-images-input {
    max-width: 100%;
  }
}
</style>

<section class="feedback-container">
  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ef6db6bfb4a7ebfc7b81a389071b6f520e0ab72aafd27466d1fb371e36ef4a5?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="sidebar-image" alt="Decorative sidebar image" />
  <main class="main-content">
    <h1 class="continue-shopping">Continue shopping</h1>
    <form class="feedback-form">
      <h2 class="feedback-title">Customer's Feedback</h2>
      <label for="rating" class="form-label">How would you rate our product?</label>
      <input type="text" id="rating" class="rating-input" placeholder="Rate from 1 to 10" aria-label="Rate from 1 to 10" />
      <label for="package-number" class="form-label">Package Number</label>
      <input type="text" id="package-number" class="package-number-input" aria-label="Enter package number" />
      <label for="package-details" class="form-label">Package details</label>
      <input type="text" id="package-details" class="package-details-input" placeholder="Enter here" aria-label="Enter package details" />
      <label for="scale-rating" class="form-label">On the scale from 1 to 10, how do rate the product?</label>
      <input type="text" id="scale-rating" class="scale-rating-input" aria-label="Enter rating from 1 to 10" />
      <label for="problems" class="form-label">What problem(s) did you encounter while using the product?</label>
      <textarea id="problems" class="problems-input" placeholder="Enter here" aria-label="Describe problems encountered"></textarea>
      <label for="suggestions" class="form-label">Do you have any suggestions on how to improve the product?</label>
      <textarea id="suggestions" class="suggestions-input" placeholder="Enter here" aria-label="Enter your suggestions"></textarea>
      <label for="product-images" class="form-label">Product Image(s)</label>
      <input type="file" id="product-images" class="product-images-input" accept="image/*" multiple aria-label="Upload product images" />
    </form>
  </main>
</section>