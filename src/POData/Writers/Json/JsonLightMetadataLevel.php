<?php

namespace POData\Writers\Json;

use MyCLabs\Enum\Enum;

/**
 * Class JsonLightMetadataLevel.
 *
 * @method static JsonLightMetadataLevel NONE()
 * @method static JsonLightMetadataLevel MINIMAL()
 * @method static JsonLightMetadataLevel MINIMAL_META()
 * @method static JsonLightMetadataLevel FULL()
 */
class JsonLightMetadataLevel extends Enum
{
    //using these const because it makes them easy to use in writer canHandle..but maybe not such a good idea
    const NONE = 'odata=nometadata';

    const MINIMAL_META = 'odata=minimalmetadata';

    const MINIMAL = 'odata.metadata=minimal';

    const FULL = 'odata=fullmetadata';
}
