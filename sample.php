<?php
include_once("HueControl.php");

// SET HUE BRIDGE IP ADDRESS
$hueIP = "";
// SET HUE BRIDGE USERNAME
$hueUser = "";

// SAVE LIGHTS
hueLightsSave();

// SET COLOR
//   VARIABLES:
//   * light id
//   * turned on [true/false]
//   * brightness [0-254]
//   * hue [0-65535]
//   * saturation [0-254]
//   * transition time [centiseconds]
hueLightSetColor(3, true, 254, 182*235, 254, 2);

sleep(2);

// SET WHITE
//   VARIABLES:
//   * light id
//   * turned on [true/false]
//   * brightness [0-254]
//   * white color temperature [154-500]
//   * transition time [centiseconds]
hueLightSetWhite(3, true, 254, 400, 2);

sleep(2);

// RESTORE LIGHTS
//   VARIABLES:
//   * transition time [centiseconds]
hueLightsRestore(2);

?>