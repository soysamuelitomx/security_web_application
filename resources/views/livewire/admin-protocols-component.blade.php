<div class="modal modal--create">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title">New Protocol</h2>
        </header>
        <main class="modal__main">
            <form action="dialog" id="protocolForm">
                <div class="modal__fieldset modal__fieldset--basic">
                    <div class="modal__form-group">
                        <label for="title" class="modal__label">Title</label>
                        <input
                            type="text"
                            id="create--title"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--title" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="use_case" class="modal__label">Use Case</label>
                        <input
                            type="text"
                            id="create--use_case"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--use_case" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="severity_level" class="modal__label">Severity Level</label>
                        <select id="create--severity_level" class="modal__input">
                            <option value="">Select Severity Level</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                        <span class="modal__span">
                            <p id="create--error--severity_level" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>
                <div class="modal__fieldset modal__fieldset--especific">
                    <div class="modal__form-group">
                        <label for="description" class="modal__label">Description</label>
                        <textarea
                            type="text"
                            id="create--description"
                            class="modal__input modal__input--textarea"
                            rows="4"
                        ></textarea>
                        <span class="modal__span">
                            <p id="create--error--description" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="active" class="modal__label">Active</label>
                        <select id="create--active" class="modal__input">
                            <option value="">Status</option>
                            <option value="true">Active</option>
                            <option value="false">Inactive</option>
                        </select>
                        <span class="modal__span">
                            <p id="create--error--active" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="use_case" class="modal__label">Procedure</label>
                        <input
                            type="text"
                            id="create--procedure"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--procedure" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>
            </form>
        </main>
        <footer class="modal__footer">
            <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                Close
            </button>
            <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="store()">
                Add
            </button>
        </footer>
    </div>
</div>



<div class="modal modal--update">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title">Update Protocol</h2>
        </header>
        <main class="modal__main">
            <form action="dialog" id="protocolFormUpdate">
                <div class="modal__fieldset modal__fieldset--basic">
                    <div class="modal__form-group">
                        <label for="title" class="modal__label">Title</label>
                        <input
                            type="text"
                            id="update--title"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--title" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="use_case" class="modal__label">Use Case</label>
                        <input
                            type="text"
                            id="update--use_case"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--use_case" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="severity_level" class="modal__label">Severity Level</label>
                        <select id="update--severity_level" class="modal__input">
                            <option value="">Select Severity Level</option>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                        <span class="modal__span">
                            <p id="update--error--severity_level" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>

                <div class="modal__fieldset modal__fieldset--especific">
                    <div class="modal__form-group">
                        <label for="description" class="modal__label">Description</label>
                        <textarea
                            type="text"
                            id="update--description"
                            class="modal__input modal__input--textarea"
                            rows="4"
                        ></textarea>
                        <span class="modal__span">
                            <p id="update--error--description" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="active" class="modal__label">Active</label>
                        <select id="update--active" class="modal__input">
                            <option value="">Status</option>
                            <option value="true">Active</option>
                            <option value="false">Inactive</option>
                        </select>
                        <span class="modal__span">
                            <p id="update--error--active" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="procedure" class="modal__label">Procedure</label>
                        <input
                            type="text"
                            id="update--procedure"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--procedure" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>
            </form>
        </main>
        <footer class="modal__footer">
            <button type="button" class="modal__button modal__button--close" onclick="closeModal()">
                Close
            </button>
            <button type="submit" id="sendButton" class="modal__button modal__button--send" onclick="update()">
                Update
            </button>
        </footer>
    </div>
</div>



<div class="modal modal--destroy">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title" id="destroyProtocol"></h2>
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



<div class="container user--container">
    <button class="button button--addUser" onclick="openModalToCreate()">Add new protocol</button>
    <table class="table">
        <thead class="table__thead">
            <tr class="table__row table__row--thead">
                <th class="table__cell table__cell--thead">ID</th>
                <th class="table__cell table__cell--thead">Title</th>
                <th class="table__cell table__cell--thead">Use Case</th>
                <th class="table__cell table__cell--thead">Severity Level</th>
                <th class="table__cell table__cell--thead">Active</th>
                <th class="table__cell table__cell--thead">Date</th>
                <th class="table__cell table__cell--thead">Update</th>
            </tr>
        </thead>
        <tbody class="table__tbody" id="protocol-table-body"></tbody>
    </table>
</div>


<script>

    const modalCreate = document.querySelector(".modal--create");
    const modalUpdate = document.querySelector(".modal--update");
    const modalDestroy = document.querySelector(".modal--destroy");
    const closeModalButton = document.querySelector(".modal__button--close");

    let all_protocols = @json($all_protocols);

    const protocols = all_protocols.map(protocol => {
        return {
            id: protocol.id,
            title: protocol.title,
            description: protocol.description,
            use_case: protocol.use_case,
            procedure: protocol.procedure,
            severity_level: protocol.severity_level,
            active: protocol.active,
            created_at: protocol.created_at, 
        };
    });

    console.log(protocols);


    const tableBody = document.getElementById('protocol-table-body');

    all_protocols.forEach(protocol => {
        const row = document.createElement('tr');
        row.className = 'table__row table__row--tbody';

        row.innerHTML = `
            <td class="table__cell table__cell--tbody">${protocol.id}</td>
            <td class="table__cell table__cell--tbody">${protocol.title}</td>
            <td class="table__cell table__cell--tbody">${protocol.use_case}</td>
            <td class="table__cell table__cell--tbody">${protocol.severity_level}</td>
            <td class="table__cell table__cell--tbody">${protocol.active ? 'Activo' : 'Inactivo'}</td>
            <td class="table__cell table__cell--tbody">${protocol.created_at}</td>
            <td class="table__cell table__cell--tbody">
                <a href="#" data-id="${protocol.id}" title="Editar" onclick="edit(${protocol.id})">
                    <i class="table__icon bi bi-pencil"></i>
                </a>
                <a href="#" data-id="${protocol.id}" title="Eliminar" onclick="assess(${protocol.id})">
                    <i class="table__icon bi bi-trash"></i>
                </a>
            </td>
        `;

        tableBody.appendChild(row);
    });


    var protocolData = {
        id: null,
        title: null,
        description: null,
        use_case: null,
        procedure: null,
        severity_level: null,
        active: null,
    };

    function store() {

        const { title, use_case, procedure, severity_level, description, active } = getCreateInputValues();

        let hasError = false;

        clearErrors();

        
        if (!title) {
            displayError('create--error--title', 'Title is required', 'create--title');
            hasError = true;
        }
        if (!use_case) {
            displayError('create--error--use_case', 'Use Case is required', 'create--use_case');
            hasError = true;
        }
        if (!procedure) {
            displayError('create--error--procedure', 'Procedure is required', 'create--procedure');
            hasError = true;
        }
        if (!severity_level) {
            displayError('create--error--severity_level', 'Severity Level is required', 'create--severity_level');
            hasError = true;
        }
        if (!description) {
            displayError('create--error--description', 'Severity Level is required', 'create--description');
            hasError = true;
        }
        if (!active) {
            displayError('create--error--active', 'Active status is required', 'create--active');
            hasError = true;
        }

        if (hasError) return;

        const protocolData = {
            id: null,
            title: title,
            use_case: use_case,
            procedure: procedure,
            description: description,
            severity_level: severity_level,
            active: active
        };

        clearErrors();
        Livewire.emit('store', protocolData);  

        setTimeout(function() {
            location.reload(); 
        },1000);
    }


    function edit(protocolId) {
        const protocolSelected = protocols.find(p => p.id == protocolId);

        if (protocolSelected) {
            
            document.getElementById('update--title').value = protocolSelected.title;
            document.getElementById('update--use_case').value = protocolSelected.use_case;
            document.getElementById('update--severity_level').value = protocolSelected.severity_level;
            document.getElementById('update--description').value = protocolSelected.description;
            
            let activeValue = protocolSelected.active === 1 ? 'true' : (protocolSelected.active === 0 ? 'false' : '');
            
            document.getElementById('update--active').value = activeValue;

            console.log('Valor asignado al select:', activeValue); 
            document.getElementById('update--procedure').value = protocolSelected.procedure;

            
            protocolData.id = protocolSelected.id;

        
            openModalToUpdate();
        } else {
            console.error('Protocolo no encontrado');
        }
    }


    function update() {
        
        const { title, use_case, severity_level, active, description, procedure } = getUpdateInputValues();

        let hasError = false;

        clearErrors();

        if (!title) {
            displayError('update--error--title', 'Title is required', 'update--title');
            hasError = true;
        }
        if (!use_case) {
            displayError('update--error--use_case', 'Use Case is required', 'update--use_case');
            hasError = true;
        }
        if (!severity_level) {
            displayError('update--error--severity_level', 'Severity Level is required', 'update--severity_level');
            hasError = true;
        }
        if (!active) {
            displayError('update--error--active', 'Active status is required', 'update--active');
            hasError = true;
        }

        if (hasError) return;

        protocolData.title = title;
        protocolData.use_case = use_case;
        protocolData.severity_level = severity_level;
        protocolData.active = active;
        protocolData.description = description;
        protocolData.procedure = procedure;

        clearErrors();

        Livewire.emit('update', protocolData);

        setTimeout(function() {
            location.reload();
        }, 500);
    }


    function assess(protocolId) {
        const protocol = all_protocols.find(p => p.id == protocolId); 
        protocolData.id = protocol.id; 
        protocolData.title = protocol.title;
        document.getElementById('destroyProtocol').textContent = `Warning: Delete ${protocolData.title}`; 

        if (protocol) {
            protocol_id = protocol.id;
            openModalToDestroy(); 
        } else {
            console.error('Protocolo no encontrado');
        }
    }

    function destroy() {
        Livewire.emit('destroy', protocolData.id); 
        setTimeout(function() {
            location.reload(); 
        }, 500);
    }


    function openModalToCreate() {
        modalCreate.classList.add("modal--visible");
    }

    function openModalToUpdate() {
        modalUpdate.classList.add("modal--visible");
    }

    function openModalToDestroy() {
        modalDestroy.classList.add("modal--visible");
    }

    function getCreateInputValues() {
        const title = document.getElementById('create--title').value;
        const use_case = document.getElementById('create--use_case').value;
        const severity_level = document.getElementById('create--severity_level').value;
        const active = document.getElementById('create--active').value;
        const description = document.getElementById('create--description').value;
        const procedure = document.getElementById('create--procedure').value;

        return {
            title,
            use_case,
            severity_level,
            procedure,
            description,
            active
        };
    }


    function getUpdateInputValues() {
        const title = document.getElementById('update--title').value;
        const use_case = document.getElementById('update--use_case').value;
        const severity_level = document.getElementById('update--severity_level').value;
        const active = document.getElementById('update--active').value;
        const description = document.getElementById('update--description').value;
        const procedure = document.getElementById('update--procedure').value;

        return {
            title,
            use_case,
            severity_level,
            procedure,
            description,
            active
        };
    }



    function closeModal() {
        clearErrors();

        
        document.getElementById('create--title').value = '';
        document.getElementById('create--use_case').value = '';
        document.getElementById('create--severity_level').value = '';
        document.getElementById('create--description').value = '';
        document.getElementById('create--active').value = '';

        
        modalCreate.classList.remove("modal--visible");
        modalUpdate.classList.remove("modal--visible");
        modalDestroy.classList.remove("modal--visible");

        
        protocolData = {};
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