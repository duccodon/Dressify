document.addEventListener('DOMContentLoaded', function() {

    const buttons = document.querySelectorAll('.filter-button');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            buttons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    var modal = document.getElementById('promotionModal');
    var btn = document.getElementById('addPromotionBtn');
    var span = document.getElementsByClassName('close')[0];
    var form = document.getElementById('promotionForm');
    var itemCheckboxes = document.getElementById('itemCheckboxes');
    var promotionContent = document.querySelector('.promotion-content');

    btn.onclick = function() {
        modal.style.display = 'block';
        populateItemCheckboxes();
    }

    span.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    function populateItemCheckboxes() {
        var items = ['Denim Jacket', 'Blue Jeans', 'Blue Sweater'];
        itemCheckboxes.innerHTML = items.map(item => 
            `<label><input type="checkbox" name="items" value="${item}"> ${item}</label>`
        ).join('');
    }

    form.onsubmit = function(e) {
        e.preventDefault();
        var formData = new FormData(form);

        fetch('add_promotion.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Server response:', data);
            if (data.success) {
                addPromotionBox(
                    data.data.discount_code,
                    data.data.discount_value,
                    [], 
                    data.data.image_url
                );
                modal.style.display = 'none';
                form.reset();
            } else {
                console.error('Error adding promotion:', data.message);
                alert('Error adding promotion: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while adding the promotion: ' + error.message);
        });
    }
    
    var deleteModal = document.getElementById('deletePromotionModal');
    var deleteBtn = document.getElementById('deletePromotionBtn');
    var deleteSpan = deleteModal.getElementsByClassName('close')[0];
    var deleteForm = document.getElementById('deletePromotionForm');

    deleteBtn.onclick = function() {
        deleteModal.style.display = 'block';
    }

    deleteSpan.onclick = function() {
        deleteModal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
        if (event.target == deleteModal) {
            deleteModal.style.display = 'none';
        }
    }

    deleteForm.onsubmit = function(e) {
        e.preventDefault();
        var formData = new FormData(deleteForm);

        fetch('delete_promotion.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Server response:', data);
            if (data.success) {
                alert('Promotion(s) deleted successfully');
                location.reload(); // Reload the page to reflect the changes
            } else {
                console.error('Error deleting promotion:', data.message);
                alert('Error deleting promotion: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while deleting the promotion: ' + error.message);
        });

        deleteModal.style.display = 'none';
        deleteForm.reset();
    }

    function addPromotionBox(discountCode, discountValue, items, imageUrl) {
        var promotionBox = document.createElement('div');
        promotionBox.className = 'promotion-box';
        
        promotionBox.innerHTML = `
            <div class="promotion-image-container">
                ${imageUrl ? `<img src="${imageUrl}" alt="Promotion Image" class="promotion-image">` : ''}
            </div>
            <div class="promotion-details">
                <h3>${discountCode}</h3>
                <p class="discount-value">${discountValue}% OFF</p>
                <p>Applies to: ${items.join(', ')}</p>
            </div>
        `;
        
        document.querySelector('.promotion-content').appendChild(promotionBox);
        
        const promotionContent = document.querySelector('.promotion-content');
        if (promotionContent.scrollHeight > promotionContent.clientHeight) {
            promotionContent.style.overflowY = 'scroll';
        }
    }
});
