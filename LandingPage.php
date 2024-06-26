<style>
  .wrapper { background-color: #fbf3d5; display: flex; flex-direction: column; }
  .header { width: 100%; }
  @media (max-width: 991px) { .header { max-width: 100%; } }
  .nav-container { gap: 20px; display: flex; }
  @media (max-width: 991px) { .nav-container { flex-direction: column; align-items: stretch; gap: 0; } }
  .logo-container { display: flex; flex-direction: column; line-height: normal; width: 33%; margin-left: 0; }
  @media (max-width: 991px) { .logo-container { width: 100%; } }
  .logo-wrapper { display: flex; flex-grow: 1; gap: 20px; font-size: 64px; color: #817373; font-weight: 400; white-space: nowrap; }
  @media (max-width: 991px) { .logo-wrapper { margin-top: 40px; font-size: 40px; white-space: initial; } }
  .logo-image { aspect-ratio: 0.84; object-fit: auto; object-position: center; width: 89px; fill: rgba(25, 34, 63, 0.5); }
  .logo-text { font-family: Text Me One, sans-serif; align-self: end; margin-top: 60px; flex-grow: 1; flex-basis: auto; }
  @media (max-width: 991px) { .logo-text { margin-top: 40px; font-size: 40px; } }
  .nav-links-container { display: flex; flex-direction: column; line-height: normal; width: 67%; margin-left: 20px; }
  @media (max-width: 991px) { .nav-links-container { width: 100%; } }
  .nav-links { display: flex; width: 100%; align-items: center; gap: 20px; align-self: stretch; font-size: 16px; color: rgba(0, 0, 0, 0.7); font-weight: 400; justify-content: space-between; margin: auto 0; }
  @media (max-width: 991px) { .nav-links { max-width: 100%; margin-top: 40px; flex-wrap: wrap; } }
  .nav-link { font-family: Rubik, sans-serif; align-self: stretch; margin: auto 0; }
  .sign-in-button { background-color: #9cafaa; align-self: stretch; display: flex; gap: 20px; font-size: 18px; color: #7f6060; justify-content: space-between; padding: 21px 41px; }
  @media (max-width: 991px) { .sign-in-button { padding: 0 20px; } }
  .sign-in-text { font-family: Text Me One, sans-serif; }
  .sign-in-icon { aspect-ratio: 1.79; object-fit: auto; object-position: center; width: 16px; stroke-width: 2px; stroke: #7f6060; border: 2px solid #7f6060; margin: auto 0; }
  .hero-section { align-self: center; z-index: 10; margin-top: 29px; width: 100%; max-width: 1330px; }
  @media (max-width: 991px) { .hero-section { max-width: 100%; } }
  .hero-content { gap: 20px; display: flex; }
  @media (max-width: 991px) { .hero-content { flex-direction: column; align-items: stretch; gap: 0; } }
  .hero-text-container { display: flex; flex-direction: column; line-height: normal; width: 38%; margin-left: 0; }
  @media (max-width: 991px) { .hero-text-container { width: 100%; } }
  .hero-text-wrapper { display: flex; flex-direction: column; align-self: stretch; font-size: 18px; color: #efbc9b; font-weight: 400; margin: auto 0; padding: 0 20px; }
  @media (max-width: 991px) { .hero-text-wrapper { max-width: 100%; margin-top: 40px; } }
  .welcome-text { font: 600 20px Rubik, sans-serif; }
  @media (max-width: 991px) { .welcome-text { max-width: 100%; } }
  .hero-title { margin-top: 31px; font: 700 72px Montserrat, sans-serif; }
  @media (max-width: 991px) { .hero-title { max-width: 100%; font-size: 40px; } }
  .hero-description { color: rgba(0, 0, 0, 0.7); font-family: Rubik, sans-serif; line-height: 27px; margin-top: 93px; }
  @media (max-width: 991px) { .hero-description { max-width: 100%; margin: 40px 4px 0 0; } }
  .cta-button { background-color: #efbc9b; align-self: start; display: flex; margin-top: 80px; gap: 20px; color: #151515; justify-content: space-between; padding: 21px 45px; }
  @media (max-width: 991px) { .cta-button { margin-top: 40px; padding: 0 20px; } }
  .cta-text { font-family: Text Me One, sans-serif; }
  .cta-icon { aspect-ratio: 1.79; object-fit: auto; object-position: center; width: 16px; stroke-width: 2px; stroke: #151515; border: 2px solid #151515; margin: auto 0; }
  .hero-image-container { display: flex; flex-direction: column; line-height: normal; width: 62%; margin-left: 20px; }
  @media (max-width: 991px) { .hero-image-container { width: 100%; } }
  .hero-image-wrapper { display: flex; flex-direction: column; overflow: hidden; position: relative; min-height: 787px; flex-grow: 1; align-items: end; justify-content: center; padding: 80px 60px; }
  @media (max-width: 991px) { .hero-image-wrapper { max-width: 100%; } }
  .hero-image { position: absolute; inset: 0; height: 100%; width: 100%; object-fit: cover; object-position: center; }
  .hero-image-overlay { position: relative; border-radius: 50%; background-color: #efbc9b; margin-top: 25px; width: 423px; max-width: 100%; height: 568px; }
  .partners-section { background-color: #efbc9b; padding: 21px 80px; }
  @media (max-width: 991px) { .partners-section { max-width: 100%; padding: 0 20px; } }
  .partners-container { gap: 20px; display: flex; }
  @media (max-width: 991px) { .partners-container { flex-direction: column; align-items: stretch; gap: 0; } }
  .partners-logos { display: flex; flex-direction: column; line-height: normal; width: 84%; margin-left: 0; }
  @media (max-width: 991px) { .partners-logos { width: 100%; } }
  .partners-logos-wrapper { flex-grow: 1; }
  @media (max-width: 991px) { .partners-logos-wrapper { max-width: 100%; margin-top: 40px; } }
  .partners-logos-grid { gap: 20px; display: flex; }
  @media (max-width: 991px) { .partners-logos-grid { flex-direction: column; align-items: stretch; gap: 0; } }
  .partners-logos-column { display: flex; flex-direction: column; line-height: normal; width: 83%; margin-left: 0; }
  @media (max-width: 991px) { .partners-logos-column { width: 100%; } }
  .partners-logos-row { flex-grow: 1; }
  @media (max-width: 991px) { .partners-logos-row { max-width: 100%; margin-top: 40px; } }
  .partners-logos-inner { gap: 20px; display: flex; }
  @media (max-width: 991px) { .partners-logos-inner { flex-direction: column; align-items: stretch; gap: 0; } }
  .partners-logo-group { display: flex; flex-direction: column; line-height: normal; width: 73%; margin-left: 0; }
  @media (max-width: 991px) { .partners-logo-group { width: 100%; } }
  .partners-logo-pair { display: flex; gap: 20px; align-self: stretch; justify-content: space-between; margin: auto 0; }
  @media (max-width: 991px) { .partners-logo-pair { max-width: 100%; margin-top: 40px; flex-wrap: wrap; } }
  .partner-logo { aspect-ratio: 4.35; object-fit: auto; object-position: center; width: 156px; max-width: 100%; }
  .partner-logo-2 { aspect-ratio: 6.25; object-fit: auto; object-position: center; width: 207px; align-self: start; max-width: 100%; }
  .partners-logo-column-2 { display: flex; flex-direction: column; line-height: normal; width: 27%; margin-left: 20px; }
  @media (max-width: 991px) { .partners-logo-column-2 { width: 100%; } }
  .partner-logo-3 { aspect-ratio: 1; object-fit: auto; object-position: center; width: 175px; fill: #fff; max-width: 100%; }
  @media (max-width: 991px) { .partner-logo-3 { margin-top: 40px; } }
  .partners-logo-column-3 { display: flex; flex-direction: column; line-height: normal; width: 17%; margin-left: 20px; }
  @media (max-width: 991px) { .partners-logo-column-3 { width: 100%; } }
  .partner-logo-4 { aspect-ratio: 0.95; object-fit: auto; object-position: center; width: 153px; max-width: 100%; }
  @media (max-width: 991px) { .partner-logo-4 { margin-top: 40px; } }
  .partners-logo-column-4 { display: flex; flex-direction: column; line-height: normal; width: 16%; margin-left: 20px; }
  @media (max-width: 991px) { .partners-logo-column-4 { width: 100%; } }
  .partners-logo-stack { align-items: center; display: flex; flex-direction: column; align-self: stretch; margin: auto 0; }
  @media (max-width: 991px) { .partners-logo-stack { margin-top: 40px; } }
  .partner-logo-5 { aspect-ratio: 1.61; object-fit: auto; object-position: center; width: 95px; fill: #004526; }
  .partner-logo-6 { aspect-ratio: 5.88; object-fit: auto; object-position: center; width: 191px; fill: #fff; margin-top: 6px; }
  .services-section { align-self: center; display: flex; margin-top: 150px; width: 100%; max-width: 1202px; flex-direction: column; padding: 0 20px; }
  @media (max-width: 991px) { .services-section { max-width: 100%; margin-top: 40px; } }
  .services-container { }
  @media (max-width: 991px) { .services-container { max-width: 100%; } }
  .services-content { gap: 20px; display: flex; }
  @media (max-width: 991px) { .services-content { flex-direction: column; align-items: stretch; gap: 0; } }
  .services-text { display: flex; flex-direction: column; line-height: normal; width: 38%; margin-left: 0; }
  @media (max-width: 991px) { .services-text { width: 100%; } }
  .services-text-wrapper { display: flex; margin-top: 4px; flex-direction: column; color: #9cafaa; font-weight: 400; }
  @media (max-width: 991px) { .services-text-wrapper { max-width: 100%; margin-top: 40px; } }
  .services-title { font: 600 20px Rubik, sans-serif; }
  @media (max-width: 991px) { .services-title { max-width: 100%; } }
  .services-subtitle { margin-top: 36px; font: 48px Text Me One, sans-serif; }
  @media (max-width: 991px) { .services-subtitle { max-width: 100%; font-size: 40px; } }
  .services-cta { background-color: #9cafaa; align-self: start; display: flex; margin-top: 43px; gap: 20px; font-size: 18px; color: #151515; justify-content: space-between; padding: 21px 45px; }
  @media (max-width: 991px) { .services-cta { margin-top: 40px; padding: 0 20px; } }
  .services-cta-text { font-family: Text Me One, sans-serif; }
  .services-cta-icon { aspect-ratio: 1.79; object-fit: auto; object-position: center; width: 16px; stroke-width: 2px; stroke: #151515; border: 2px solid #151515; margin: auto 0; }
  .services-cards { display: flex; flex-direction: column; line-height: normal; width: 62%; margin-left: 20px; }
  @media (max-width: 991px) { .services-cards { width: 100%; } }
  .services-cards-wrapper { flex-grow: 1; }
  @media (max-width: 991px) { .services-cards-wrapper { max-width: 100%; margin-top: 40px; } }
  .services-cards-grid { gap: 20px; display: flex; }
  @media (max-width: 991px) { .services-cards-grid { flex-direction: column; align-items: stretch; gap: 0; } }
  .services-card-column { display: flex; flex-direction: column; line-height: normal; width: 50%; margin-left: 0; }
  @media (max-width: 991px) { .services-card-column { width: 100%; } }
  .services-card { border: 1px solid #000; background-color: #d6dac8; display: flex; flex-grow: 1; flex-direction: column; font-weight: 400; width: 100%; padding: 60px 40px; }
  @media (max-width: 991px) { .services-card { padding: 0 20px; } }
  .services-card-divider { border: 2px solid #817373; background-color: #817373; height: 2px; }
  .services-card-title { color: #817373; margin-top: 39px; font: 24px Text Me One, sans-serif; }
  .services-card-description { color: rgba(0, 0, 0, 0.7); margin-top: 39px; font: 16px/24px Rubik, sans-serif; }
  .services-card-icon { aspect-ratio: 1; object-fit: auto; object-position: center; width: 53px; align-self: end; margin-top: 73px; }
  @media (max-width: 991px) { .services-card-icon { margin: 40px 3px 0 0; } }
  .services-card-column-2 { display: flex; flex-direction: column; line-height: normal; width: 50%; margin-left: 20px; }
  @media (max-width: 991px) { .services-card-column-2 { width: 100%; } }
  .services-card-2 { border: 1px solid #2e2e2e; background-color: #d6dac8; display: flex; flex-grow: 1; flex-direction: column; font-weight: 400; width: 100%; padding: 60px 40px; }
  @media (max-width: 991px) { .services-card-2 { padding: 0 20px; } }
  .benefits-section { align-self: center; width: 100%; max-width: 1056px; }
  @media (max-width: 991px) { .benefits-section { max-width: 100%; } }
  .benefits-grid { gap: 20px; display: flex; }
  @media (max-width: 991px) { .benefits-grid { flex-direction: column; align-items: stretch; gap: 0; } }
  .benefit-card { border: 1px solid #2e2e2e; background-color: #d6dac8; display: flex; flex-grow: 1; flex-direction: column; font-weight: 400; width: 100%; padding: 60px 40px; }
  @media (max-width: 991px) { .benefit-card { padding: 0 20px; } }
  .benefit-card-divider { border: 2px solid #817373; background-color: #817373; height: 2px; }
  .benefit-card-title { color: #817373; margin-top: 39px; font: 24px Text Me One, sans-serif; }
  .benefit-card-description { color: rgba(0, 0, 0, 0.7); margin-top: 10px; font: 16px/24px Rubik, sans-serif; }
  .benefit-card-icon { aspect-ratio: 1; object-fit: auto; object-position: center; width: 53px; align-self: end; margin-top: 73px; }
  @media (max-width: 991px) { .benefit-card-icon { margin-top: 40px; } }
  .benefit-card-column { display: flex; flex-direction: column; line-height: normal; width: 33%; margin-left: 20px; }
  @media (max-width: 991px) { .benefit-card-column { width: 100%; } }
  .benefits-title { color: #9cafaa; margin-top: 143px; font: 600 20px Rubik, sans-serif; }
  @media (max-width: 991px) { .benefits-title { max-width: 100%; margin-top: 40px; } }
  .global-section { margin-top: 9px; width: 100%; }
  @media (max-width: 991px) { .global-section { max-width: 100%; } }
  .global-content { gap: 20px; display: flex; }
  @media (max-width: 991px) { .global-content { flex-direction: column; align-items: stretch; gap: 0; } }
  .global-text { display: flex; flex-direction: column; line-height: normal; width: 50%; margin-left: 0; }
  @media (max-width: 991px) { .global-text { width: 100%; } }
  .global-text-wrapper { display: flex; margin-top: 14px; flex-direction: column; align-items: end; }
  @media (max-width: 991px) { .global-text-wrapper { max-width: 100%; margin-top: 40px; } }
  .global-text-container { display: flex; gap: 20px; font-weight: 400; }
  @media (max-width: 991px) { .global-text-container { flex-wrap: wrap; } }
  .global-text-divider { background-color: #19223f; width: 6px; height: 267px; }
  .global-text-content { align-self: start; display: flex; margin-top: 7px; flex-direction: column; flex-grow: 1; flex-basis: 0; width: fit-content; padding: 0 20px; }
  @media (max-width: 991px) { .global-text-content { max-width: 100%; } }
  .global-title { color: #1a75ff; font: 48px/48px Text Me One, sans-serif; }
  @media (max-width: 991px) { .global-title { max-width: 100%; font-size: 40px; line-height: 45px; } }
  .global-description { color: #9cafaa; margin-top: 30px; font: 16px/24px Rubik, sans-serif; }
  @media (max-width: 991px) { .global-description { max-width: 100%; } }
  .global-stats { align-self: stretch; margin-top: 34px; }
  @media (max-width: 991px) { .global-stats { max-width: 100%; } }
  .global-stats-grid { gap: 20px; display: flex; }
  @media (max-width: 991px) { .global-stats-grid { flex-direction: column; align-items: stretch; gap: 0; } }
  .global-stats-column { display: flex; flex-direction: column; line-height: normal; width: 75%; margin-left: 0; }
  @media (max-width: 991px) { .global-stats-column { width: 100%; } }
  .global-stats-wrapper { display: flex; flex-grow: 1; flex-direction: column; padding: 0 20px; }
  @media (max-width: 991px) { .global-stats-wrapper { max-width: 100%; margin-top: 22px; } }
  .global-stats-container { }
  @media (max-width: 991px) { .global-stats-container { max-width: 100%; } }
  .global-stats-row { gap: 20px; display: flex; }
  @media (max-width: 991px) { .global-stats-row { flex-direction: column; align-items: stretch; gap: 0; } }
  .global-stats-item { display: flex; flex-direction: column; line-height: normal; width: 83%; margin-left: 0; }
  @media (max-width: 991px) { .global-stats-item { width: 100%; } }
  .global-stats-content { display: flex; flex-grow: 1; flex-direction: column; font-size: 20px; color: #9cafaa; font-weight: 600; }
  @media (max-width: 991px) { .global-stats-content { margin-top: 40px; } }
  .global-stats-icon { aspect-ratio: 0.74; object-fit: auto; object-position: center; width: 191px; max-width: 100%; }
  .global-stats-label { font-family: Rubik, sans-serif; align-self: end; margin-top: 26px; }
  .global-stats-item-2 { display: flex; flex-direction: column; line-height: normal; width: 17%; margin-left: 20px; }
  @media (max-width: 991px) { .global-stats-item-2 { width: 100%; } }
  .global-stats-content-2 { display: flex; margin-top: 8px; flex-direction: column; color: #9cafaa; font-weight: 400; line-height: 100%; }
  @media (max-width: 991px) { .global-stats-content-2 { margin-top: 40px; } }
  .global-stats-number { font: 28px Text Me One, sans-serif; }
  .global-stats-label-2 { margin-top: 26px; font: 14px Rubik, sans-serif; }
  .global-tracking { color: #9cafaa; align-self: end; margin-top: 36px; font: 400 48px Text Me One, sans-serif; }
  @media (max-width: 991px) { .global-tracking { font-size: 40px; } }
  .global-stats-column-2 { display: flex; flex-direction: column; line-height: normal; width: 25%; margin-left: 20px; }
  @media (max-width: 991px) { .global-stats-column-2 { width: 100%; } }
  .global-stats-content-3 { display: flex; margin-top: 8px; flex-direction: column; color: #9cafaa; font-weight: 400; line-height: 100%; padding: 0 20px; }
  @media (max-width: 991px) { .global-stats-content-3 { margin-top: 30px; } }
  .global-stats-number-2 { font: 28px Text Me One, sans-serif; }
  .global-stats-label-3 { margin-top: 23px; font: 14px Rubik, sans-serif; }
  .global-stats-icon-2 { aspect-ratio: 1; object-fit: auto; object-position: center; width: 85px; align-self: end; margin-top: 218px; }
  @media (max-width: 991px) { .global-stats-icon-2 { margin-top: 40px; } }
  .global-cta { display: flex; margin-top: 25px; width: 558px; max-width: 100%; flex-direction: column; font-weight: 400; padding: 0 20px; }
  .global-cta-text { color: rgba(0, 0, 0, 0.7); font: 16px/24px Rubik, sans-serif; }
  @media (max-width: 991px) { .global-cta-text { max-width: 100%; } }
  .global-cta-button { background-color: #9cafaa; align-self: start; display: flex; margin-top: 29px; gap: 20px; font-size: 18px; color: #151515; padding: 21px 45px; }
  @media (max-width: 991px) { .global-cta-button { padding: 0 20px; } }
  .global-cta-button-text { font-family: Text Me One, sans-serif; }
  .global-cta-button-icon { aspect-ratio: 1.79; object-fit: auto; object-position: center; width: 16px; stroke-width: 2px; stroke: #151515; border: 2px solid #151515; margin: auto 0; }
  .global-image { display: flex; flex-direction: column; line-height: normal; width: 50%; margin-left: 20px; }
  @media (max-width: 991px) { .global-image { width: 100%; } }
  .global-image-wrapper { display: flex; flex-grow: 1; flex-direction: column; }
  @media (max-width: 991px) { .global-image-wrapper { max-width: 100%; margin-top: 40px; } }
  .global-image-main { aspect-ratio: 1.72; object-fit: auto; object-position: center; width: 100%; }
  @media (max-width: 991px) { .global-image-main { max-width: 100%; } }
  .global-image-overlay { border-radius: 50%; background-color: #f5d8b8; align-self: end; margin-top: 164px; width: 476px; max-width: 100%; height: 476px; }
  @media (max-width: 991px) { .global-image-overlay { margin-top: 40px; } }
  .features-section { align-self: center; margin-top: 150px; width: 100%; max-width: 1170px; padding: 0 20px; }
  @media (max-width: 991px) { .features-section { max-width: 100%; margin-top: 40px; } }
  .features-grid { gap: 20px; display: flex; }
  @media (max-width: 991px) { .features-grid { flex-direction: column; align-items: stretch; gap: 0; } }
  .feature-card { border: 1px solid #2e2e2e; display: flex; flex-grow: 1; flex-direction: column; align-items: start; font-size: 16px; color: #817373; font-weight: 400; padding: 53px 50px; }
  @media (max-width: 991px) { .feature-card { padding: 0 20px; } }
  .feature-icon { aspect-ratio: 1; object-fit: auto; object-position: center; width: 53px; }
  .feature-title { margin-top: 27px; font: 32px/35px Text Me One, sans-serif; }
  .feature-description { color: rgba(0, 0, 0, 0.7); font-family: Rubik, sans-serif; line-height: 24px; margin-top: 35px; width: 277px; }
  .feature-link { display: flex; margin-top: 24px; gap: 20px; }
  .feature-link-text { font-family: Text Me One, sans-serif; flex-grow: 1; flex-basis: auto; }
  .feature-link-icon { aspect-ratio: 1.89; object-fit: auto; object-position: center; width: 17px; fill: #817373; align-self: start; }
  .feature-card-column { display: flex; flex-direction: column; line-height: normal; width: 33%; margin-left: 20px; }
  @media (max-width: 991px) { .feature-card-column { width: 100%; } }
  .feature-card-dark { background-color: #2e2e2e; display: flex; width: 100%; flex-grow: 1; flex-direction: column; align-items: start; font-size: 16px; color: #fbf3d5; font-weight: 400; margin: 0 auto; padding: 53px 50px; }
  @media (max-width: 991px) { .feature-card-dark { padding: 0 20px; } }
  .feature-link-icon-light { aspect-ratio: 1.89; object-fit: auto; object-position: center; width: 17px; fill: #fbf3d5; align-self: start; }
  .testimonials-section { background-color: #9cafaa; display: flex; margin-top: 160px; width: 100%; padding-bottom: 8px; flex-direction: column; }
  @media (max-width: 991px) { .testimonials-section { max-width: 100%; padding-right: 20px; margin-top: 40px; } }
  .testimonials-wrapper { display: flex; flex-direction: column; stroke-width: 1px; stroke: #000; overflow: hidden; position: relative; z-index: 10; min-height: 841px; margin-top: -8px; width: 100%; padding-bottom: 80px; }
  @media (max-width: 991px) { .testimonials-wrapper { max-width: 100%; } }
  .testimonials-bg { position: absolute; inset: 0; height: 100%; width: 100%; object-fit: cover; object-position: center; }
  .testimonials-content { position: relative; align-self: center; z-index: 10; display: flex; margin-top: -71px; width: 100%; max-width: 1216px; flex-direction: column; color: #d6dac8; }
  @media (max-width: 991px) { .testimonials-content { max-width: 100%; } }
  .testimonials-header { display: flex; gap: 20px; font-size: 20px; font-weight: 600; }
  @media (max-width: 991px) { .testimonials-header { max-width: 100%; flex-wrap: wrap; padding-right: 20px; } }
  .testimonials-title { font-family: Rubik, sans-serif; align-self: end; margin-top: 195px; flex-grow: 1; flex-basis: auto; }
  @media (max-width: 991px) { .testimonials-title { margin-top: 40px; } }
  .testimonials-icon { aspect-ratio: 1.1; object-fit: auto; object-position: center; width: 230px; max-width: 100%; }
  .testimonials-subtitle { display: flex; margin-top: 34px; gap: 20px; font-size: 72px; font-weight: 400; line-height: 72px; }
  @media (max-width: 991px) { .testimonials-subtitle { max-width: 100%; flex-wrap: wrap; font-size: 40px; line-height: 44px; } }
  .testimonials-subtitle-text { font-family: Text Me One, sans-serif; flex-grow: 1; flex-basis: auto; }
  @media (max-width: 991px) { .testimonials-subtitle-text { max-width: 100%; font-size: 40px; line-height: 44px; } }
  .testimonials-subtitle-icon { aspect-ratio: 2.38; object-fit: auto; object-position: center; width: 132px; max-width: 100%; margin: auto 0; }
  .testimonials-grid { position: relative; display: flex; width: 100%; gap: 20px; font-weight: 400; justify-content: space-between; margin: 64px 0 16px; }
  @media (max-width: 991px) { .testimonials-grid { max-width: 100%; flex-wrap: wrap; margin-top: 40px; } }
  .testimonial-sidebar { box-shadow: 0px 20px 50px 0px rgba(49, 49, 49, 0.05); background-color: #d6dac8; width: 115px; height: 359px; }
  .testimonial-card { box-shadow: 0px 20px 50px 0px rgba(49, 49, 49, 0.05); background-color: #d6dac8; display: flex; flex-direction: column; color: #817373; padding: 58px 50px; }
  @media (max-width: 991px) { .testimonial-card { padding: 0 20px; } }
  .testimonial-text { font: 14px/30px Rubik, sans-serif; }
  .testimonial-author { display: flex; margin-top: 35px; gap: 14px; white-space: nowrap; }
  @media (max-width: 991px) { .testimonial-author { white-space: initial; } }
  .testimonial-avatar { aspect-ratio: 1; object-fit: auto; object-position: center; width: 48px; border-radius: 50%; }
  .testimonial-info { display: flex; flex-direction: column; margin: auto 0; }
  @media (max-width: 991px) { .testimonial-info { white-space: initial; } }
  .testimonial-name { font: 14px Text Me One, sans-serif; }
  .testimonial-role { margin-top: 12px; font: 12px Rubik, sans-serif; }
  .cta-banner { background-color: #9cafaa; align-self: center; margin-top: 140px; width: 1200px; max-width: 100%; padding: 17px 80px 8px 0; }
  @media (max-width: 991px) { .cta-banner { padding-right: 20px; margin-top: 40px; } }
  .cta-content { gap: 20px; display: flex; }
  @media (max-width: 991px) { .cta-content { flex-direction: column; align-items: stretch; gap: 0; } }
  .cta-image-column { display: flex; flex-direction: column; line-height: normal; width: 41%; margin-left: 0; }
  @media (max-width: 991px) { .cta-image-column { width: 100%; } }
  .cta-image { aspect-ratio: 1.1; object-fit: auto; object-position: center; width: 100%; flex-grow: 1; }
  @media (max-width: 991px) { .cta-image { margin-top: 40px; } }
  .cta-text-column { display: flex; flex-direction: column; line-height: normal; width: 59%; margin-left: 20px; }
  @media (max-width: 991px) { .cta-text-column { width: 100%; } }
  .cta-text-wrapper { display: flex; flex-direction: column; align-self: stretch; font-weight: 400; margin: auto 0; }
  @media (max-width: 991px) { .cta-text-wrapper { max-width: 100%; margin-top: 40px; } }
  .cta-title { color: #151515; text-align: center; letter-spacing: -0.84px; font: 72px/123% Text Me One, sans-serif; }
  @media (max-width: 991px) { .cta-title { max-width: 100%; font-size: 40px; } }
  .cta-button { background-color: #151515; align-self: center; margin-top: 58px; color: #9cafaa; justify-content: center; padding: 21px 46px; font: 32px Text Me One, sans-serif; }
  @media (max-width: 991px) { .cta-button { margin-top: 40px; padding: 0 20px; } }
  .footer { display: flex; flex-direction: column; stroke-width: 1px; stroke: #fff; overflow: hidden; position: relative; min-height: 221px; margin-top: 157px; width: 100%; align-items: center; padding: 3px 60px 46px; }
  @media (max-width: 991px) { .footer { max-width: 100%; margin-top: 40px; padding: 0 20px; } }
  .footer-bg { position: absolute; inset: 0; height: 100%; width: 100%; object-fit: cover; object-position: center; }
  .footer-content { position: relative; display: flex; width: 100%; max-width: 1216px; gap: 20px; justify-content: space-between; }
  @media (max-width: 991px) { .footer-content { max-width: 100%; flex-wrap: wrap; } }
  .footer-brand { align-self: start; display: flex; flex-direction: column; }
  .footer-logo { color: #817373; letter-spacing: -0.44px; font: 400 22px/127% Text Me One, -apple-system, Roboto, Helvetica, sans-serif; }
  .footer-description { color: rgba(0, 0, 0, 0.7); margin-top: 30px; font: 400 16px/24px Rubik, sans-serif; }
  .footer-social { justify-content: center; display: flex; margin-top: 43px; padding-right: 72px; gap: 17px; }
  @media (max-width: 991px) { .footer-social { padding-right: 20px; margin-top: 40px; } }
  .social-icon { aspect-ratio: 1; object-fit: auto; object-position: center; width: 20px; margin: auto 0; }
  .footer-links { align-self: start; display: flex; flex-direction: column; font-size: 16px; color: rgba(0, 0, 0, 0.7); font-weight: 400; line-height: 150%; }
  .footer-links-title { font: 22px/109% Text Me One, sans-serif; }
  .footer-link { font-family: Rubik, sans-serif; margin-top: 28px; }
  .footer-newsletter { background-color: rgba(0, 0, 0, 0.7); display: flex; padding-left: 18px; gap: 20px; font-size: 16px; font-weight: 400; white-space: nowrap; letter-spacing: -0.32px; line-height: 162.5%; margin: auto 0; }
  @media (max-width: 991px) { .footer-newsletter { white-space: initial; } }
  .newsletter-input { color: #fbf3d5; font-family: Rubik, sans-serif; flex-grow: 1; flex-basis: auto; margin: auto 0; }
  .newsletter-button { font-family: Text Me One, sans-serif; background-color: #9cafaa; color: #151515; justify-content: center; padding: 20px 43px; }
  @media (max-width: 991px) { .newsletter-button { white-space: initial; padding: 0 20px; } }
  </style>
  
  <div class="wrapper">
    <header class="header">
      <nav class="nav-container">
        <div class="logo-container">
          <div class="logo-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef1c57dd-f848-4202-b456-1fc8df3eb044?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Logo" class="logo-image" />
            <span class="logo-text">FRIENDS</span>
          </div>
        </div>
        <div class="nav-links-container">
          <div class="nav-links">
            <a href="#" class="nav-link">Why Friends</a>
            <a href="#" class="nav-link">Terms of use</a>
            <a href="#" class="nav-link">Feedback</a>
            <a href="#" class="nav-link">Contact</a>
            <div class="sign-in-button">
              <span class="sign-in-text">Sign in</span>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d23728ac3130592e39689104affbdfd6c7be8668f97af59c09c65d846221a39e?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Sign in" class="sign-in-icon" />
            </div>
          </div>
        </div>
      </nav>
    </header>
  
    <main>
      <section class="hero-section">
        <div class="hero-content">
          <div class="hero-text-container">
            <div class="hero-text-wrapper">
              <h2 class="welcome-text">Welcome!</h2>
              <h1 class="hero-title">
                The World's Best Clothing Rental
                <span style="color: #efbc9b;">Platform</span>
              </h1>
              <p class="hero-description">
                We provide the widest range of clothes from casual outfits to high-end fashion with competitive pricing.
              </p>
              <button class="cta-button">
                <span class="cta-text">Get Started</span>
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b19110c5d3d10ff7d2da96be65a6cf627d76465c96da1727b2bfb6d7eab82d3e?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Arrow" class="cta-icon" />
              </button>
            </div>
          </div>
          <div class="hero-image-container">
            <div class="hero-image-wrapper">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6302bbdfa09c43956b11e80f646fb6fdf07f49dad7752ccd39df9b1b690fe075?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Hero" class="hero-image" />
              <div class="hero-image-overlay"></div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="partners-section">
        <div class="partners-container">
          <div class="partners-logos">
            <div class="partners-logos-wrapper">
              <div class="partners-logos-grid">
                <div class="partners-logos-column">
                  <div class="partners-logos-row">
                    <div class="partners-logos-inner">
                      <div class="partners-logo-group">
                        <div class="partners-logo-pair">
                          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6d6759eb1364047755be621c44af62b105ca097db192bec46b431060f4e19f5c?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 1" class="partner-logo" />
                          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0f0bb241eeb7a6c1b445ad8b90e46f88f9a03c62161c63f30d0ee2a5408f883?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 2" class="partner-logo-2" />
                        </div>
                      </div>
                      <div class="partners-logo-column-2">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/042acd227ce9b7224db440203eea3ad70bf93fe41a1eacc9557d2e7192d8cef1?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 3" class="partner-logo-3" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="partners-logo-column-3">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/01dcd775ec5ababaa284720f4dcbcdadb6107f5ea323077bb5bbd0d2adf06539?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 4" class="partner-logo-4" />
                </div>
              </div>
            </div>
          </div>
          <div class="partners-logo-column-4">
            <div class="partners-logo-stack">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/dfacba74-0d93-4ef4-adda-d47ceb28c97a?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 5" class="partner-logo-5" />
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/83ba47fe66cc57f9d818d68be7f13a0be8a6d3473fa650dcf85e3e3d619fe6e9?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Partner 6" class="partner-logo-6" />
            </div>
          </div>
        </div>
      </section>
  
      <section class="services-section">
        <div class="services-container">
          <div class="services-content">
            <div class="services-text">
              <div class="services-text-wrapper">
                <h2 class="services-title">Our Services</h2>
                <h3 class="services-subtitle">
                  Browse our services & <span style="color: #9cafaa;">offerings</span>
                </h3>
                <button class="services-cta">
                  <span class="services-cta-text">Get Started</span>
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b19110c5d3d10ff7d2da96be65a6cf627d76465c96da1727b2bfb6d7eab82d3e?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Arrow" class="services-cta-icon" />
                </button>
              </div>
            </div>
            <div class="services-cards">
              <div class="services-cards-wrapper">
                <div class="services-cards-grid">
                  <div class="services-card-column">
                    <div class="services-card">
                      <div class="services-card-divider"></div>
                      <h4 class="services-card-title">Wishlists</h4>
                      <p class="services-card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                      </p>
                      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/67fbeeb1f41e6ff74f72dda0599395027ffc17b21d4637b3fdfaa2786980da28?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Wishlist icon" class="services-card-icon" />
                    </div>
                  </div>
                  <div class="services-card-column-2">
                    <div class="services-card-2">
                      <div class="services-card-divider"></div>
                      <h4 class="services-card-title">Order Checking</h4>
                      <p class="services-card-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
                      </p>
                      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e7a38d00c717b82db3b53d7296cf5a970e39202035fac08f9f63ca8e2cd7121?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Order checking icon" class="services-card-icon" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="benefits-section">
        <h2 class="benefits-title">Benefits</h2>
        <div class="benefits-grid">
          <div class="benefit-card">
            <div class="benefit-card-divider"></div>
            <h3 class="benefit-card-title">Multiple payment methods</h3>
            <p class="benefit-card-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
            </p>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e7a38d00c717b82db3b53d7296cf5a970e39202035fac08f9f63ca8e2cd7121?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Payment methods icon" class="benefit-card-icon" />
          </div>
          <div class="benefit-card-column">
            <div class="benefit-card">
              <div class="benefit-card-divider"></div>
              <h3 class="benefit-card-title">Membership and loyalty points</h3>
              <p class="benefit-card-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
              </p>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e7a38d00c717b82db3b53d7296cf5a970e39202035fac08f9f63ca8e2cd7121?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Membership icon" class="benefit-card-icon" />
            </div>
          </div>
          <div class="benefit-card-column">
            <div class="benefit-card">
              <div class="benefit-card-divider"></div>
              <h3 class="benefit-card-title">Secured shopping</h3>
              <p class="benefit-card-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor
              </p>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8e7a38d00c717b82db3b53d7296cf5a970e39202035fac08f9f63ca8e2cd7121?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Secured shopping icon" class="benefit-card-icon" />
            </div>
          </div>
        </div>
      </section>
  
      <section class="global-section">
        <div class="global-content">
          <div class="global-text">
            <div class="global-text-wrapper">
              <div class="global-text-container">
                <div class="global-text-divider"></div>
                <div class="global-text-content">
                  <h2 class="global-title">
                    We have users around the <span style="color: #1a75ff;">globe</span>
                  </h2>
                  <p class="global-description">
                    Unlock endless styles with Friends. Rent designer looks you love without breaking the bank. Track your outfits every step of the way, and enjoy peace of mind with photo verification for any damages or concerns.
                  </p>
                </div>
              </div>
              <div class="global-stats">
                <div class="global-stats-grid">
                  <div class="global-stats-column">
                    <div class="global-stats-wrapper">
                      <div class="global-stats-container">
                        <div class="global-stats-row">
                          <div class="global-stats-item">
                            <div class="global-stats-content">
                              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/75753734-b904-4f02-a145-1faae24e7e59?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Services icon" class="global-stats-icon" />
                              <p class="global-stats-label">Our Services</p>
                            </div>
                          </div>
                          <div class="global-stats-item-2">
                            <div class="global-stats-content-2">
                              <p class="global-stats-number">
                                30 <span style="color: #9cafaa;">+</span>
                              </p>
                              <p class="global-stats-label-2">Country</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="global-tracking">
                        Real Time <br />
                        <span style="color: #9cafaa;">Order Tracking</span>
                      </p>
                    </div>
                  </div>
                  <div class="global-stats-column-2">
                    <div class="global-stats-content-3">
                      <p class="global-stats-number-2">
                        $50M <span style="color: #9cafaa;">+</span>
                      </p>
                      <p class="global-stats-label-3">Transaction</p>
                      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f78613199f95c717d910b2f98bd9d7d0173b88fa8113d8734b9dbfdd43c1df8?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Transaction icon" class="global-stats-icon-2" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="global-cta">
                <p class="global-cta-text">
                  We offer comprehensive order tracking, allowing you to follow your items every step of the way. In case of any concerns, our system facilitates damage or issue verification through photographic documentation.
                </p>
                <button class="global-cta-button">
                  <span class="global-cta-button-text">Get Started</span>
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b19110c5d3d10ff7d2da96be65a6cf627d76465c96da1727b2bfb6d7eab82d3e?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Arrow" class="global-cta-button-icon" />
                </button>
              </div>
            </div>
          </div>
          <div class="global-image">
            <div class="global-image-wrapper">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/81530f2218c2c5d49bae920928daa1a2f9ebf629e0678915170560a970cb2476?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Global reach" class="global-image-main" />
              <div class="global-image-overlay"></div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="features-section">
        <div class="features-grid">
          <div class="feature-card">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/be963299ab23a2f2f4aa1a46e3e8f6017517dba27c6f4af18284722bb44bf7c5?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Local business finance" class="feature-icon" />
            <h3 class="feature-title">
              Local business <br /> finance
            </h3>
            <p class="feature-description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
            </p>
            <div class="feature-link">
              <span class="feature-link-text">Learn more</span>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/09c53134064d9da2c566aab108a62f54c27bbbfd75e5cfd5a906e4227cb0d4a5?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Learn more" class="feature-link-icon" />
            </div>
          </div>
          <div class="feature-card-column">
            <div class="feature-card-dark">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/665678508b511f841cbf3d2ae7f7adc4b027b5f7ab515b121dd2252b6ca78281?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Global payments" class="feature-icon" />
              <h3 class="feature-title">
                Built for global <br /> payments
              </h3>
              <p class="feature-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              </p>
              <div class="feature-link">
                <span class="feature-link-text">Learn more</span>
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/36029940aec59a442f12125a59c256a36d23807db7679b4f5674e863c5b5cd79?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Learn more" class="feature-link-icon-light" />
              </div>
            </div>
          </div>
          <div class="feature-card-column">
            <div class="feature-card">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f56ee2336f0471ed1be1e3ce29851e5d5c60c1d527947fd2c28637cf5382cae6?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Internet of Money" class="feature-icon" />
              <h3 class="feature-title">
                Make internet of <br /> Money
              </h3>
              <p class="feature-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              </p>
              <div class="feature-link">
                <span class="feature-link-text">Learn more</span>
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/09c53134064d9da2c566aab108a62f54c27bbbfd75e5cfd5a906e4227cb0d4a5?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Learn more" class="feature-link-icon" />
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="testimonials-section">
        <div class="testimonials-wrapper">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0c0a5e9132926b113aa7f8403fcb5cf024226c5dbe5a050928a325960a1c80e3?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Testimonials background" class="testimonials-bg" />
          <div class="testimonials-content">
            <div class="testimonials-header">
              <h2 class="testimonials-title">Our Services</h2>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f94a9502ba935074db6a9ca76914d5294f9a0a7efbd964114fa7f9f9b353a9e4?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Services icon" class="testimonials-icon" />
            </div>
            <div class="testimonials-subtitle">
              <h3 class="testimonials-subtitle-text">Global businesses love Friends</h3>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/074fb177a514b3010ac91ca9393343165f89cde03fcd157406945b847e3ff994?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Global icon" class="testimonials-subtitle-icon" />
            </div>
            <div class="testimonials-grid">
              <div class="testimonial-sidebar"></div>
              <div class="testimonial-card">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                </p>
                <div class="testimonial-author">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8543afec3da3d9ad36b55f45bc3ba83e7ab09bf818f7100a616b6bbe9b00d627?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Mahesh" class="testimonial-avatar" />
                  <div class="testimonial-info">
                    <p class="testimonial-name">Mahesh</p>
                    <p class="testimonial-role">CEO</p>
                  </div>
                </div>
              </div>
              <div class="testimonial-card">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                </p>
                <div class="testimonial-author">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7408a0ba59e1fbc6b3b31248b2177d7d38195da4079c26210082ba83e1b4170?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Ranveer" class="testimonial-avatar" />
                  <div class="testimonial-info">
                    <p class="testimonial-name">Ranveer</p>
                    <p class="testimonial-role">Webflow Developer</p>
                  </div>
                </div>
              </div>
              <div class="testimonial-card">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                </p>
                <div class="testimonial-author">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/140c74744d6d885fe4af00921a22c8107a3363c7e2e734bfcc07061ba4600651?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Tony Stark" class="testimonial-avatar" />
                  <div class="testimonial-info">
                    <p class="testimonial-name">Tony Stark</p>
                    <p class="testimonial-role">CEO</p>
                  </div>
                </div>
              </div>
              <div class="testimonial-card">
                <p class="testimonial-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel
                </p>
                <div class="testimonial-author">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/409b6bf8f5d99bdaace3cb73a6c16d2996b37877b53dd651b7bb2f933e74861f?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Ranveer" class="testimonial-avatar" />
                  <div class="testimonial-info">
                    <p class="testimonial-name">Ranveer</p>
                    <p class="testimonial-role">Webflow Developer</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="cta-banner">
        <div class="cta-content">
          <div class="cta-image-column">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f48c9c2a1cf3e5da2cdeca7f0ae4311de49e0a0149c9a5d286aeb605a6e5b485?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="CTA image" class="cta-image" />
          </div>
          <div class="cta-text-column">
            <div class="cta-text-wrapper">
              <h2 class="cta-title">Rent. Enjoy. Repeat</h2>
              <button class="cta-button">Shop now!</button>
            </div>
          </div>
        </div>
      </section>
    </main>
  
    <footer class="footer">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ef6ddfc8b391b058ed857c3ed6ae58343589f1b159ebef98af749ed476789fb0?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="Footer background" class="footer-bg" />
      <div class="footer-content">
        <div class="footer-brand">
          <h2 class="footer-logo">Friends</h2>
          <p class="footer-description">Lorem ipsum dolor sit amet, consectetur</p>
          <div class="footer-social">
            <a href="#" aria-label="Facebook">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/28bc8e502da164358c968c122c83a7c1ba4a003238bc6e50afaef5f3c82e775e?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="" class="social-icon" />
            </a>
            <a href="#" aria-label="Twitter">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/df7acb49d103e1b035d8b2f07a38cef922811228565e3d4a457b880e5f31792a?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="" class="social-icon" />
            </a>
            <a href="#" aria-label="Instagram">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/09b3c0154691a22be3dc00d2fabf8ac95dfdf8892c3754d18b85262eccc901ee?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="" class="social-icon" />
            </a>
            <a href="#" aria-label="LinkedIn">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fd515e56e4d87c8452658bc5cda9c38fba7c9f02b693231bfd4cee4c6243d176?apiKey=ddd8aa0cfecf4afdbc9c5aaf3fe7201a&" alt="" class="social-icon" />
            </a>
          </div>
        </div>
        <nav class="footer-links">
          <h3 class="footer-links-title">Company</h3>
          <a href="#" class="footer-link">About Us</a>
          <a href="#" class="footer-link">Careers</a>
          <a href="#" class="footer-link">Blog</a>
        </nav>
        <nav class="footer-links">
          <h3 class="footer-links-title">FAQ</h3>
          <a href="#" class="footer-link">Account</a>
          <a href="#" class="footer-link">Manage deliveries</a>
          <a href="#" class="footer-link">Orders tracking</a>
          <a href="#" class="footer-link">Report process</a>
        </nav>
        <form class="footer-newsletter">
          <label for="newsletter-email" class="visually-hidden">Enter your email</label>
          <input type="email" id="newsletter-email" class="newsletter-input" placeholder="your@email.com" required>
          <button type="submit" class="newsletter-button">Subscribe</button>
        </form>
      </div>
    </footer>
  </div>