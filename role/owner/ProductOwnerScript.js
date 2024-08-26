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

    form.onsubmit = function(e) {
        e.preventDefault();
        var discountCode = form.discountCode.value;
        var selectedItems = Array.from(itemCheckboxes.querySelectorAll('input[type="checkbox"]:checked'))
            .map(cb => cb.value);

        // Add new promotion box
        addPromotionBox(discountCode, selectedItems);

        // Close the modal after submission
        modal.style.display = 'none';
        form.reset();
    }

    function populateItemCheckboxes() {
        var items = ['Denim Jacket', 'Blue Jeans', 'Blue Sweater'];
        itemCheckboxes.innerHTML = items.map(item => 
            `<label><input type="checkbox" name="items" value="${item}"> ${item}</label>`
        ).join('');
    }

    function addPromotionBox(discountCode, items) {
        var promotionBox = document.createElement('div');
        promotionBox.className = 'promotion-box';
        promotionBox.innerHTML = `
            <h3>${discountCode}</h3>
            <p>Applies to: ${items.join(', ')}</p>
        `;
        promotionContent.appendChild(promotionBox);
    }
});
