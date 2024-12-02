<div class="modal modal--create">
    <div class="modal__content">
        <header class="modal__header">
            <h2 class="modal__title">New Audit</h2>
        </header>
        <main class="modal__main">
            <form action="dialog" id="auditForm">
                <div class="modal__fieldset modal__fieldset--basic">
                    <div class="modal__form-group">
                        <label for="audit_name" class="modal__label">Audit Name</label>
                        <input
                            type="text"
                            id="create--audit_name"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--audit_name" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="audit_type" class="modal__label">Audit Type</label>
                        <input
                            type="text"
                            id="create--audit_type"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--audit_type" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>
                <div class="modal__fieldset modal__fieldset--especific">
                    <div class="modal__form-group">
                        <label for="auditor" class="modal__label">Auditor</label>
                        <input
                            type="text"
                            id="create--auditor"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="create--error--auditor" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="status" class="modal__label">Status</label>
                        <select id="create--status" class="modal__input">
                            <option value="">Select Status</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="en proceso">En Proceso</option>
                            <option value="completada">Completada</option>
                        </select>
                        <span class="modal__span">
                            <p id="create--error--status" class="modal__span-p"></p>
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
            <h2 class="modal__title">Update Audit</h2>
        </header>
        <main class="modal__main">
            <form action="dialog" id="auditForm">
                <div class="modal__fieldset modal__fieldset--basic">
                    <div class="modal__form-group">
                        <label for="audit_name" class="modal__label">Audit Name</label>
                        <input
                            type="text"
                            id="update--audit_name"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--audit_name" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="audit_type" class="modal__label">Audit Type</label>
                        <input
                            type="text"
                            id="update--audit_type"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--audit_type" class="modal__span-p"></p>
                        </span>
                    </div>
                </div>

                <div class="modal__fieldset modal__fieldset--especific">
                    <div class="modal__form-group">
                        <label for="auditor" class="modal__label">Auditor</label>
                        <input
                            type="text"
                            id="update--auditor"
                            class="modal__input"
                        />
                        <span class="modal__span">
                            <p id="update--error--auditor" class="modal__span-p"></p>
                        </span>
                    </div>
                    <div class="modal__form-group">
                        <label for="status" class="modal__label">Status</label>
                        <select id="update--status" name="status" required class="modal__input">
                            <option value="">Select Status</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="en proceso">En Proceso</option>
                            <option value="completada">Completada</option>
                        </select>
                        <span class="modal__span">
                            <p id="update--error--status" class="modal__span-p"></p>
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
            <h2 class="modal__title" id="destroyAudit"></h2>
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
    <button class="button button--addUser" onclick="openModalToCreate()">Add new audit</button>
    <table class="table">
        <thead class="table__thead">
            <tr class="table__row table__row--thead">
                <th class="table__cell table__cell--thead">ID</th>
                <th class="table__cell table__cell--thead">Name</th>
                <th class="table__cell table__cell--thead">Type</th>
                <th class="table__cell table__cell--thead">Auditor</th>
                <th class="table__cell table__cell--thead">Status</th>
                <th class="table__cell table__cell--thead">Date</th>
                <th class="table__cell table__cell--thead">Update</th>
            </tr>
        </thead>
        <tbody class="table__tbody" id="user-table-body"></tbody>
    </table>
</div>

<script>

    const modalCreate = document.querySelector(".modal--create");
    const modalUpdate = document.querySelector(".modal--update");
    const modalDestroy = document.querySelector(".modal--destroy");
    const closeModalButton = document.querySelector(".modal__button--close");

    let all_audits = @json($all_audits);

    const audits = all_audits.map(audit => {
        return {
            id: audit.id,
            audit_name: audit.audit_name,
            audit_type: audit.audit_type,
            auditor: audit.auditor,
            status: audit.status,
            date: audit.created_at,
        };
    });

    console.log(audits);

    const tableBody = document.getElementById('user-table-body');

    all_audits.forEach(audit => {

        const row = document.createElement('tr');
        row.className = 'table__row table__row--tbody';

        row.innerHTML = `
            <td class="table__cell table__cell--tbody">${audit.id}</td>
            <td class="table__cell table__cell--tbody">${audit.audit_name}</td>
            <td class="table__cell table__cell--tbody">${audit.audit_type}</td>
            <td class="table__cell table__cell--tbody">${audit.auditor}</td>
            <td class="table__cell table__cell--tbody">${audit.status}</td>
            <td class="table__cell table__cell--tbody">${audit.created_at}</td>
            <td class="table__cell table__cell--tbody">
                <a href="#" data-id="${audit.id}" title="Editar" onclick="edit(${audit.id})">
                    <i class="table__icon bi bi-pencil"></i>
                </a>
                <a href="#" data-id="${audit.id}" title="Eliminar" onclick="assess(${audit.id})">
                    <i class="table__icon bi bi-trash"></i>
                </a>
            </td>
        `;

        tableBody.appendChild(row);

    });

    var auditData = {
        id: null,
        audit_name: null,
        audit_type: null,
        auditor: null,
        status: null,
    };

    function store() {

        const { auditName, auditType, auditor, status } = getCreateInputValues();

        let hasError = false;

        clearErrors();

        
        if (!auditName) {
            displayError('create--error--audit_name', 'Audit Name is required', 'create--audit_name');
            hasError = true;
        }
        if (!auditType) {
            displayError('create--error--audit_type', 'Audit Type is required', 'create--audit_type');
            hasError = true;
        }
        if (!auditor) {
            displayError('create--error--auditor', 'Auditor is required', 'create--auditor');
            hasError = true;
        }
        if (!status) {
            displayError('create--error--status', 'Status is required', 'create--status');
            hasError = true;
        }

        if (hasError) return;

        const auditData = {
            id: null,
            audit_name: auditName,
            audit_type: auditType,
            auditor: auditor,
            status: status,
        };

        clearErrors();
        Livewire.emit('store', auditData);  

        setTimeout(function() {
            location.reload(); 
        }, 1000);

    }

    function edit(auditId) {

        const auditSelected = audits.find(a => a.id == auditId);

        if (auditSelected) {

            document.getElementById('update--audit_name').value = auditSelected.audit_name;
            document.getElementById('update--audit_type').value = auditSelected.audit_type;
            document.getElementById('update--auditor').value = auditSelected.auditor;
            document.getElementById('update--status').value = auditSelected.status;

            auditData.id = auditSelected.id;

            openModalToUpdate();

        } else {
            console.error('Auditoría no encontrada');
        }

    }

    function update() {

        const { audit_name, audit_type, auditor, status } = getUpdateInputValues();

        let hasError = false;

        clearErrors();

        if (!audit_name) {
            displayError('update--error--audit_name', 'Audit Name is required', 'update--audit_name');
            hasError = true;
        }
        if (!audit_type) {
            displayError('update--error--audit_type', 'Audit Type is required', 'update--audit_type');
            hasError = true;
        }
        if (!auditor) {
            displayError('update--error--auditor', 'Auditor is required', 'update--auditor');
            hasError = true;
        }
        if (!status) {
            displayError('update--error--status', 'Status is required', 'update--status');
            hasError = true;
        }

        if (hasError) return;

        auditData.audit_name = audit_name;
        auditData.audit_type = audit_type;
        auditData.auditor = auditor;
        auditData.status = status;

        auditData.audit_name = document.getElementById('update--audit_name').value;
        auditData.audit_type = document.getElementById('update--audit_type').value;
        auditData.auditor = document.getElementById('update--auditor').value;
        auditData.status = document.getElementById('update--status').value;

        clearErrors();

        Livewire.emit('update', auditData);

        
        setTimeout(function() {
            location.reload();
        }, 500);
    }

    function assess(auditId) {

        const audit = audits.find(a => a.id == auditId); 
        auditData.id = audit.id; 
        auditData.audit_name = audit.audit_name;
        document.getElementById('destroyAudit').textContent = `Warning: Delete ${auditData.audit_name}`; 

        if (audit) {
            audit_id = audit.id;
            openModalToDestroy(); 
        } else {
            console.error('Auditoría no encontrada');
        }
    }

    function destroy() {

        Livewire.emit('destroy', auditData.id);
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
        const auditName = document.getElementById('create--audit_name').value;
        const auditType = document.getElementById('create--audit_type').value;
        const auditor = document.getElementById('create--auditor').value;
        const status = document.getElementById('create--status').value;

        return {
            auditName,
            auditType,
            auditor,
            status
        };
    }

    function getUpdateInputValues() {

        const audit_name = document.getElementById('update--audit_name').value;
        const audit_type = document.getElementById('update--audit_type').value;
        const auditor = document.getElementById('update--auditor').value;
        const status = document.getElementById('update--status').value;

        return { audit_name, audit_type, auditor, status };
    }

    function closeModal() {
        clearErrors();
        document.getElementById('create--audit_name').value = '';
        document.getElementById('create--audit_type').value = '';
        document.getElementById('create--auditor').value = '';
        document.getElementById('create--status').value = '';

        modalCreate.classList.remove("modal--visible");
        modalUpdate.classList.remove("modal--visible");
        modalDestroy.classList.remove("modal--visible");
        auditData = {};
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