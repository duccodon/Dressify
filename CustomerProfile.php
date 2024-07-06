<style>
.profile-container {
  background-color: #fbf3d5;
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .profile-container {
    flex-wrap: wrap;
  }
}

.sidebar-image {
  aspect-ratio: 0.09;
  object-fit: cover;
  object-position: center;
  width: 149px;
  max-width: 100%;
}

@media (max-width: 991px) {
  .sidebar-image {
    display: none;
  }
}

.main-content {
  align-self: start;
  display: flex;
  margin-top: 38px;
  flex-direction: column;
  flex-grow: 1;
  flex-basis: 0;
  width: fit-content;
  padding: 0 20px;
}

@media (max-width: 991px) {
  .main-content {
    max-width: 100%;
  }
}

.continue-shopping {
  color: #1e1e1e;
  font: 600 25px Poppins, sans-serif;
}

@media (max-width: 991px) {
  .continue-shopping {
    max-width: 100%;
  }
}

.profile-form {
  align-self: center;
  display: flex;
  margin-top: 34px;
  width: 100%;
  max-width: 1092px;
  flex-direction: column;
}

@media (max-width: 991px) {
  .profile-form {
    max-width: 100%;
  }
}

.avatar-container {
  display: flex;
  flex-direction: column;
  overflow: hidden;
  align-self: center;
  position: relative;
  aspect-ratio: 1;
  width: 364px;
  max-width: 100%;
  align-items: end;
  padding: 80px 60px 11px;
}

@media (max-width: 991px) {
  .avatar-container {
    padding-left: 20px;
  }
}

.avatar-background {
  position: absolute;
  inset: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.avatar-icon {
  aspect-ratio: 1;
  object-fit: auto;
  object-position: center;
  width: 77px;
  margin-top: 196px;
}

@media (max-width: 991px) {
  .avatar-icon {
    margin-top: 40px;
  }
}

.username {
  color: #000;
  align-self: center;
  margin-top: 20px;
  font: 500 70px Plus Jakarta Sans, -apple-system, Roboto, Helvetica, sans-serif;
}

@media (max-width: 991px) {
  .username {
    max-width: 100%;
    font-size: 40px;
  }
}

.form-label {
  color: #1c1c1c;
  font: 600 26px Roboto, sans-serif;
}

.form-input {
  border-radius: 5px;
  border: 5px solid rgba(156, 175, 170, 1);
  background-color: #fbf3d5;
  margin-top: 9px;
  color: #858585;
  padding: 31px 32px;
  font: 500 24px Roboto, sans-serif;
}

@media (max-width: 991px) {
  .form-input {
    max-width: 100%;
    padding: 0 20px;
  }
}

.form-row {
  margin-top: 18px;
}

@media (max-width: 991px) {
  .form-row {
    max-width: 100%;
  }
}

.form-columns {
  gap: 20px;
  display: flex;
}

@media (max-width: 991px) {
  .form-columns {
    flex-direction: column;
    align-items: stretch;
    gap: 0px;
  }
}

.form-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 50%;
  margin-left: 0px;
}

@media (max-width: 991px) {
  .form-column {
    width: 100%;
  }
}

.form-group {
  display: flex;
  flex-grow: 1;
  flex-direction: column;
}

@media (max-width: 991px) {
  .form-group {
    max-width: 100%;
    margin-top: 40px;
  }
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
</style>

<section class="profile-container">
  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/945d0dfae47f7a8fe1b6a91afd2e7a6502e0700712796660afef3257b44f36f2?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="sidebar-image" alt="" />
  <main class="main-content">
    <h1 class="continue-shopping">Continue shopping</h1>
    <form class="profile-form">
      <div class="avatar-container">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4be34a31d6ae2a4a6578c203ed39a03a77bad7c9c009ff148bb8b463a3e8182f?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="avatar-background" alt="Profile background" />
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff525f8f701695d4c0f9c4a79c121f4bda49dee8aec8044b7c4ed7cc911cf7?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="avatar-icon" alt="User avatar" />
      </div>
      <h2 class="username">Sonali.</h2>
      
      <label for="name" class="form-label">Name</label>
      <input type="text" id="name" class="form-input" value="Mehrab" />
      
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email" class="form-input" value="Mehrabbozorgi.business@gmail.com" />
      
      <div class="form-row">
        <div class="form-columns">
          <div class="form-column">
            <div class="form-group">
              <label for="country" class="form-label">Country</label>
              <input type="text" id="country" class="form-input" value="Mehrab" />
            </div>
          </div>
          <div class="form-column">
            <div class="form-group">
              <label for="city" class="form-label">City</label>
              <input type="text" id="city" class="form-input" value="Mehrab" />
            </div>
          </div>
        </div>
      </div>
      
      <label for="address" class="form-label">Address</label>
      <input type="text" id="address" class="form-input" value="33062 Zboncak isle" />
      
      <label for="contact" class="form-label">Contact Number</label>
      <input type="tel" id="contact" class="form-input" value="58077.79" />
      
      <label for="username" class="form-label">Username</label>
      <input type="text" id="username" class="form-input" value="sbdfbnd65sfdvb s" />
      
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" class="form-input" value="sbdfbnd65sfdvb s" />
    </form>
  </main>
</section>