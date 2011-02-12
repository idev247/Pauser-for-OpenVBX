<div class="vbx-applet">
	<h2>Pause</h2>
    <p>A pause (time delay/silence) will be added for the following amount of seconds.</p>
    <div class="vbx-full-pane">
        <fieldset class="vbx-input-complex vbx-input-container">
            <input type="text" value="<?php echo AppletInstance::getValue('pause-time', PAUSER_DEFAULT_PAUSE_TIME); ?>" class="left tiny" name="pause-time">
            <label class="field-label-left checked">second(s)</label>
        </fieldset>
    </div>
	<br />
	<h2>Next</h2>
    <p>After the pause, continue to the next applet</p>
	<div class="vbx-full-pane">
		<?php echo AppletUI::DropZone('next-step') ?>
	</div>
</div>
