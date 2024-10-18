<div class="container">
    <div class="field">
        <label class="label" for="description">Descripción</label>
    
        <div class="control">
        <input class="input" type="text" name="description" id="description" 
            value="<?= old('description', esc($task->description)) ?>">
        </div>
    </div>
</div>