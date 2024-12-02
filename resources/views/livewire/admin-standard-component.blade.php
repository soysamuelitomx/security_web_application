<div class="modal modal--create">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title">New Standard</h2>
        </header>
        <main class="modal__main">
            <form id="standardForm">
                <div class="modal__fieldset modal__fieldset--basic">
                    <!-- Campo para el nombre del estándar -->
                    <div class="modal__form-group">
                        <label for="standard_name" class="modal__label">Standard Name</label>
                        <input
                            type="text"
                            id="create--name"
                            class="modal__input"
                            placeholder="Enter the standard name"
                        />
                        <span class="modal__span">
                            <p id="create--error--name" class="modal__span-p"></p>
                        </span>
                    </div>

                    <!-- Campo para la descripción del estándar -->
                    <div class="modal__form-group">
                        <label for="standard_description" class="modal__label">Description</label>
                        <textarea
                            id="create--description"
                            class="modal__input"
                            rows="4"
                            placeholder="Enter a brief description"
                        ></textarea>
                        <span class="modal__span">
                            <p id="create--error--description" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>
            </form>
        </main>
        <footer class="modal__footer">
            <!-- Botón para cerrar el modal -->
            <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                Close
            </button>
            <!-- Botón para agregar el estándar -->
            <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="store()">
                Add Standard
            </button>
        </footer>
    </div>
</div>

<div class="modal modal--destroy">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title" id="destroyStandard"></h2>
        </header>
        <main class="modal__main">
            <form action="dialog" id="auditForm">
                <div class="modal__fieldset modal__fieldset--basic">
                    <p class="modal__warning">This action will permanently delete the user. Do you want to continue?</p>
                </div>
            </form>
        </main>
        <footer class="modal__footer">
            <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                Close
            </button>
            <button type="submit" id="sendButton" class="modal__button modal__button--destroy" onclick="destroy()">
                Destroy
            </button>
        </footer>
    </div>
</div>

<div class="container standard--container">
    <!-- component -->
    <section>
        <div class="py-16">
            <div class="mx-auto px-6 max-w-6xl text-gray-500">
                <div class="text-center">
                    <h2 class="text-3xl text-gray-950 dark:text-white font-semibold">Security Standards</h2>
                    <p class="mt-6 text-gray-700 dark:text-gray-300">You would get to add, see and delete the standards what you want.</p>
                </div>
                <button class="button button--addUser" onclick="openModalToCreate()"><i class="bx bx-plus"></i></button>
                <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-3 gap-3">

                


                </div>
            </div>
        </div>
    </section>
</div>

<script>

    const modalCreate = document.querySelector(".modal--create");
    const modalDestroy = document.querySelector(".modal--destroy");
    const closeModalButton = document.querySelector(".modal__button--close");

    
    let all_standards = @json($all_standards);

    
    const standards = all_standards.map(standard => ({
        id: standard.id,
        name: standard.name,
        description: standard.description,
    }));

    console.log(standards);

    var standardData = {
        id: null,
        name: null,
        description: null,
    };

    
    const container = document.querySelector('.mt-12.grid');

    
        container.innerHTML = ''; // Limpiar el contenedor

        standards.forEach(standard => {
            const standardElement = document.createElement('div');
            standardElement.className = 'relative group overflow-hidden p-8 rounded-xl bg-white border border-gray-200 dark:border-gray-800 dark:bg-gray-700';

            standardElement.innerHTML = `
                <div aria-hidden="true" class="inset-0 absolute aspect-video border rounded-full -translate-y-1/2 group-hover:-translate-y-1/4 duration-300 bg-gradient-to-b from-sky-500 to-white dark:from-white dark:to-white blur-2xl opacity-25 dark:opacity-5 dark:group-hover:opacity-10"></div>
                <div class="relative">
                    <!-- Título -->
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white">${standard.name}</h2>

                    <div class="mt-6 pb-6 rounded-b-[--card-border-radius]">
                        <p class="text-gray-700 dark:text-gray-300">${standard.description}</p>
                    </div>
                    <div class="flex gap-3 -mb-8 py-4 border-t border-gray-200 dark:border-gray-800">
                        <!-- Botón Eliminar -->
                        <a href="#" class="group rounded-xl text-gray-950 bg-gray-100 hover:bg-gray-200/75 active:bg-gray-100 dark:text-white dark:bg-gray-500/10 dark:hover:bg-gray-500/15 dark:active:bg-gray-500/10 flex gap-1.5 items-center text-sm h-8 px-3.5 justify-center" onclick="assess(${standard.id})">
                            <span><i class="bx bx-trash"></i></span>
                        </a>
                    </div>
                </div>
            `;

            container.appendChild(standardElement);
        });

    function store() {
        
        const { name, description } = getCreateInputValues();

        let hasError = false;

        clearErrors();

        
        if (!name) {
            displayError('create--error--name', 'Standard Name is required', 'create--name');
            hasError = true;
        }
        if (!description) {
            displayError('create--error--description', 'Description is required', 'create--description');
            hasError = true;
        }

        if (hasError) return;

        const standardData = {
            id: null,
            name: name,
            description: description,
        };

        clearErrors();

        
        Livewire.emit('store', standardData);

        
        setTimeout(function() {
            location.reload(); 
        }, 1000);
    }

    function assess(standardId) {

        const standard = standards.find(s => s.id == standardId); 
        standardData.id = standard.id; 
        standardData.name = standard.name;
        document.getElementById('destroyStandard').textContent = `Warning: Delete ${standardData.name}`; 

        if (standard) {
            standard_id = standard.id;
            openModalToDestroy(); 
        } else {
            console.error('Estandar no encontrada');
        }
    }

    function destroy() {

        Livewire.emit('destroy', standardData.id); 
        setTimeout(function() {
            location.reload(); 
        }, 500);

    }

    function getCreateInputValues() {
        const name = document.getElementById('create--name').value;
        const description = document.getElementById('create--description').value;

        return {
            name,
            description
        };
    }

    function openModalToCreate() {
        modalCreate.classList.add("modal--visible");
    }

    function openModalToDestroy() {
        modalDestroy.classList.add("modal--visible");
    }

    function closeModal() {
        clearErrors();
        document.getElementById('create--name').value = '';
        document.getElementById('create--description').value = '';

        modalCreate.classList.remove("modal--visible");
        modalDestroy.classList.remove("modal--visible");
        standardData = {};
    }

    function displayError(spanId, message, inputId) {
        document.getElementById(spanId).textContent = message;
        const input = document.getElementById(inputId);
        input.style.backgroundColor = '#f6c7b7';
        input.style.outline = '2px solid #911';
        setTimeout(() => {
            input.style.backgroundColor = '';
            input.style.outline = '';
        }, 1000);
    }

    function clearErrors() {
        const spans = document.querySelectorAll('.modal__span-p');
        spans.forEach(span => {
            span.textContent = '';  
        });

        const inputs = document.querySelectorAll('.modal__input');
        inputs.forEach(input => {
            input.style.backgroundColor = '';  
            input.style.border = '';  
        });
    }



</script>
