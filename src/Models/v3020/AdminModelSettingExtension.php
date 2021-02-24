<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getInstalled($type)
 * @method ApiResponse install($type, $code)
 * @method ApiResponse uninstall($type, $code)
 * @method ApiResponse addExtensionInstall($filename, $extension_download_id = 0)
 * @method ApiResponse deleteExtensionInstall($extension_install_id)
 * @method ApiResponse getExtensionInstalls($start = 0, $limit = 10)
 * @method ApiResponse getExtensionInstallByExtensionDownloadId($extension_download_id)
 * @method ApiResponse getTotalExtensionInstalls()
 * @method ApiResponse addExtensionPath($extension_install_id, $path)
 * @method ApiResponse deleteExtensionPath($extension_path_id)
 * @method ApiResponse getExtensionPathsByExtensionInstallId($extension_install_id)
 */
class AdminModelSettingExtension extends BaseModel
{
    const MODEL_NAME = 'setting/extension';
    const IS_ADMIN = true;
}

