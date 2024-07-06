<style>
  .notification-container {
    background-color: #fbf3d5;
    padding: 0 80px 0 0;
    display: flex;
  }

  @media (max-width: 991px) {
    .notification-container {
      padding-right: 20px;
      flex-direction: column;
    }
  }

  .sidebar {
    width: 20%;
    padding-right: 20px;
  }

  @media (max-width: 991px) {
    .sidebar {
      width: 100%;
      padding-right: 0;
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
    display: flex;
    width: 84%;
  }

  @media (max-width: 991px) {
    .main-content {
      width: 100%;
      flex-direction: column;
    }
  }

  .notification-list {
    flex-grow: 1;
    padding-right: 20px;
    width: 60%;
  }

  .header-container {
    display: flex;
    margin-bottom: 20px;
    align-items: center;
  }

  .continue-shopping {
    color: #1e1e1e;
    font: 25px Poppins, sans-serif;
    text-decoration: none;
  }

  .notification-item {
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
    border: 1px solid #000;
    background-color: #fff;
    margin-bottom: 20px;
    width: 100%;
    height: 122px;
  }

  .notification-placeholder {
    background-color: #d9d9d9;
    margin-bottom: 20px;
    width: 100%;
    height: 122px;
  }

  .notification-sidebar {
    width: 40%;
    border-left: 1px solid #000;
    padding-left: 20px;
  }

  .notification-title {
    color: #000;
    font: 45px Roboto, sans-serif;
    margin: 0;
  }

  @media (max-width: 991px) {
    .notification-title {
      font-size: 40px;
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

<section class="notification-container">
  <aside class="sidebar">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/76a094c3fdebe47eb49078c459ca30cd54d7e752d1bcbd017ae38ffa153e3f26?apiKey=06f22fa033964e85a3e6f07dc7f00b07&" class="sidebar-image" alt="" />
  </aside>
  <main class="main-content">
    <div class="notification-list">
      <header class="header-container">
        <a href="#" class="continue-shopping" tabindex="0">Continue shopping</a>
      </header>
      <article class="notification-item"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
      <article class="notification-placeholder"></article>
    </div>
    <aside class="notification-sidebar">
      <h1 class="notification-title">Notification</h1>
    </aside>
  </main>
</section>