<?= $this->include('templates/header'); ?>

<div class="contact-container">
  <h1>Contact Us</h1>
  <form action="#" method="post">
    <div class="form-group">
      <label for="name">Name:</label>

      <input type="text" id="name" name="name" required />
    </div>

    <div class="form-group">
      <label for="email">Email:</label>

      <input type="email" id="email" name="email" required />
    </div>

    <div class="form-group">
      <label for="message">Message:</label>

      <textarea id="message" name="message" rows="5" required></textarea>
    </div>

    <button type="submit">Send Message</button>
  </form>
</div>

<?= $this->include('templates/footer'); ?>

<style>
    /* Contact Form */
    .contact-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffffff; /* White background for the form */
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-container h1 {
        text-align: center;
        color: #428bca; /* Darker blue for the heading */
    }

    .contact-container .form-group {
        margin-bottom: 15px;
    }

    .contact-container label {
        display: block;
        margin-bottom: 5px;
        color: #428bca; /* Darker blue for labels */
    }

    .contact-container input[type="text"],
    .contact-container input[type="email"],
    .contact-container textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #428bca; /* Darker blue border */
        border-radius: 4px;
        box-sizing: border-box;
    }

    .contact-container input[type="text"]:focus,
    .contact-container input[type="email"]:focus,
    .contact-container textarea:focus {
        border-color: #1e69aa; /* Even darker blue on focus */
        outline: none;
    }

    .contact-container button {
        background-color: #428bca; /* Darker blue for the button */
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: 100%;
    }

    .contact-container button:hover {
        background-color: #1e69aa; /* Darker blue on hover */
    }
</style>