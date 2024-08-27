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
        var discountCode = form.discountCode.value;
        var discountValue = form.discountValue.value;
        var promotionImage = form.promotionImage.files[0];
        var selectedItems = Array.from(itemCheckboxes.querySelectorAll('input[type="checkbox"]:checked'))
            .map(cb => cb.value);
    
        if (promotionImage) {
            var reader = new FileReader();
            reader.onload = function(e) {
                addPromotionBox(discountCode, discountValue, selectedItems, e.target.result);
            }
            reader.readAsDataURL(promotionImage);
        } else {
            addPromotionBox(discountCode, discountValue, selectedItems, null);
        }
    
        modal.style.display = 'none';
        form.reset();
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
