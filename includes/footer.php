    <!-- JavaScript -->
    <script>
        // Modal functionality
        const createBtn = document.getElementById('createBtn');
        const createModal = document.getElementById('createModal');
        const closeCreateModal = document.getElementById('closeCreateModal');
        const cancelCreateBtn = document.getElementById('cancelCreateBtn');
        const sourceTypeRadios = document.querySelectorAll('input[name="sourceType"]');
        const csvFields = document.getElementById('csvFields');
        const gsheetFields = document.getElementById('gsheetFields');
        const submitCreateBtn = document.getElementById('submitCreateBtn');

        createBtn.addEventListener('click', () => {
            createModal.classList.remove('hidden');
            createModal.querySelector('.modal-enter').classList.add('modal-enter-active');
        });

        closeCreateModal.addEventListener('click', closeModal);
        cancelCreateBtn.addEventListener('click', closeModal);

        function closeModal() {
            createModal.querySelector('.modal-enter').classList.remove('modal-enter-active');
            createModal.querySelector('.modal-enter').classList.add('modal-exit-active');
            setTimeout(() => {
                createModal.classList.add('hidden');
                createModal.querySelector('.modal-enter').classList.remove('modal-exit-active');
            }, 200);
        }

        sourceTypeRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.value === 'csv') {
                    csvFields.classList.remove('hidden');
                    gsheetFields.classList.add('hidden');
                } else {
                    csvFields.classList.add('hidden');
                    gsheetFields.classList.remove('hidden');
                }
            });
        });

        submitCreateBtn.addEventListener('click', () => {
            const toast = document.createElement('div');
            toast.className = 'bg-green-500 text-white px-4 py-2 rounded-md shadow-lg flex items-center gap-2';
            toast.innerHTML = '<i class="fas fa-check-circle"></i> Connection created successfully!';
            document.getElementById('toastContainer').appendChild(toast);
            setTimeout(() => {
                toast.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
            closeModal();
        });
    </script>
    <script src="script.js">
    </script>
    </body>

    </html>