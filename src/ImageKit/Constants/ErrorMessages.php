<?php

namespace ImageKit\Constants;


/**
 *
 */
class ErrorMessages
{
    public static $INVALID_UPLOAD_OPTIONS = ['message' => 'Invalid Upload Options ImageKit initialization', 'help' => ''];
    public static $INVALID_LIST_FILES_OPTIONS = ['message' => 'Invalid List Files Options ImageKit initialization', 'help' => ''];
    public static $MANDATORY_INITIALIZATION_MISSING = ['message' => 'Missing publicKey or privateKey or urlEndpoint during ImageKit initialization', 'help' => ''];
    public static $INVALID_TRANSFORMATION_POSITION = ['message' => 'Invalid transformationPosition parameter', 'help' => ''];
    public static $INVALID_FILE_OPTIONS = ['message' => 'Invalid File Options ImageKit initialization', 'help' => ''];
    public static $CACHE_PURGE_URL_MISSING = ['message' => 'Missing URL parameter for this request', 'help' => ''];
    public static $CACHE_PURGE_STATUS_ID_MISSING = ['message' => 'Missing Request ID parameter for this request', 'help' => ''];
    public static $fileId_MISSING = ['message' => 'Missing File ID parameter for this request', 'help' => ''];
    public static $versionId_MISSING = ['message' => 'Missing Version ID parameter for this request', 'help' => ''];
    public static $JOBID_MISSING = ['message' => 'Missing Job ID parameter for this request', 'help' => ''];
    public static $UPDATE_DATA_MISSING = ['message' => 'Missing file update data for this request', 'help' => ''];
    public static $BULK_TAGS_DATA_MISSING = ['message' => 'Missing bulk tag update data for this request', 'help' => ''];
    public static $UPDATE_DATA_TAGS_INVALID = ['message' => 'Invalid tags parameter for this request', 'help' => "tags should be passed as null or an array like ['tag1', 'tag2']"];
    public static $UPDATE_DATA_COORDS_INVALID = ['message' => 'Invalid customCoordinates parameter for this request', 'help' => "customCoordinates should be passed as null or a string like 'x,y,width,height'"];
    public static $LIST_FILES_INPUT_MISSING = ['message' => 'Missing options for list files', 'help' => 'if you do not want to pass any parameter for listing, pass an empty object'];
    public static $MISSING_UPLOAD_DATA = ['message' => 'Missing data for upload', 'help' => ''];
    public static $MISSING_UPLOAD_FILE_PARAMETER = ['message' => 'Missing file parameter for upload', 'help' => ''];
    public static $MISSING_UPLOAD_FILENAME_PARAMETER = ['message' => 'Missing fileName parameter for upload', 'help' => ''];
    public static $INVALID_PHASH_VALUE = ['message' => 'Invalid pHash value', 'help' => 'Both pHash strings must be valid hexadecimal numbers'];
    public static $MISSING_PHASH_VALUE = ['message' => 'Missing pHash value', 'help' => 'Both pHash strings must be valid hexadecimal numbers'];
    public static $UNEQUAL_STRING_LENGTH = ['message' => 'Unequal pHash string length', 'help' => 'For distance calucation, the two pHash strings must have equal length'];
    public static $fileIdS_MISSING = ['message' => 'FileIds parameter is missing.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $fileIdS_NON_ARRAY = ['message' => 'File ids should be passed in an array.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $MISSING_URL_PARAMETER = ['message' => 'Your request is missing the url query paramater.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $COPY_FILE_PARAMETER_MISSING = ['message' => 'Copy File API accepts an array, null passed.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $COPY_FILE_PARAMETER_NON_ARRAY = ['message' => 'Copy File API accepts an array of parameters, non array value passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $COPY_FILE_PARAMETER_EMPTY_ARRAY = ['message' => 'Copy File API accepts an array of parameters, empty array passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $COPY_FILE_DATA_INVALID = ['message' => 'Missing parameter sourceFilePath and/or destinationPath and/or includeVersions for copy file.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $MOVE_FILE_PARAMETER_MISSING = ['message' => 'Move File API accepts an array, null passed.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $MOVE_FILE_PARAMETER_NON_ARRAY = ['message' => 'Move File API accepts an array of parameters, non array value passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $MOVE_FILE_PARAMETER_EMPTY_ARRAY = ['message' => 'Move File API accepts an array of parameters, empty array passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $MOVE_FILE_DATA_INVALID = ['message' => 'Missing parameter sourceFilePath and/or destinationPath for move file.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    
    public static $RENAME_FILE_DATA_INVALID = ['message' => 'Rename File Parameters are invalid.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $RESTORE_FILE_VERSION_PARAMETER_MISSING = ['message' => 'Restore File Version API accepts an array, null passed.', 'help' =>
    'For support kindly contact us at support@imagekit.io .'];
    public static $RESTORE_FILE_VERSION_PARAMETER_NON_ARRAY = ['message' => 'Restore File Version API accepts an array of parameters, non array value passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $RESTORE_FILE_VERSION_PARAMETER_EMPTY_ARRAY = ['message' => 'Restore File Version API accepts an array of parameters, empty array passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $RESTORE_FILE_VERSION_DATA_INVALID = ['message' => 'Missing parameter fileId and/or versionId for Restore File Version API.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $CREATE_FOLDER_PARAMETER_MISSING = ['message' => 'Create Folder API accepts an array, null passed.', 'help' =>
    'For support kindly contact us at support@imagekit.io .'];
    public static $CREATE_FOLDER_PARAMETER_NON_ARRAY = ['message' => 'Create Folder API accepts an array of parameters, non array value passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $CREATE_FOLDER_PARAMETER_EMPTY_ARRAY = ['message' => 'Create Folder API accepts an array of parameters, empty array passed.', 'help' => 'For support kindly contact us at support@imagekit.io .'];
    public static $CREATE_FOLDER_DATA_INVALID = ['message' => 'Missing parameter folderName and/or parentFolderPath for Create Folder API.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $DELETE_FOLDER_PARAMETER_MISSING = ['message' => 'Missing folderPath for Delete Folder API.', 'help' =>
        'For support kindly contact us at support@imagekit.io .'];
    public static $MISSING_CREATE_FOLDER_OPTIONS = ['message' => 'Missing data for creation of folder', 'help' => ''];
    public static $MISSING_DELETE_FOLDER_OPTIONS = ['message' => 'Missing data for deletion of folder', 'help' => ''];
    public static $MISSING_COPY_FOLDER_OPTIONS = ['message' => 'Missing data for copying folder', 'help' => ''];
    public static $MISSING_MOVE_FOLDER_OPTIONS = ['message' => 'Missing data for moving folder', 'help' => ''];
}
