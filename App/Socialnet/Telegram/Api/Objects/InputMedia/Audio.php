<?php

namespace App\Socialnet\Telegram\Api\Objects\InputMedia;

use App\Socialnet\Telegram\Api\FileUpload\InputFile;

/**
 * Class InputMediaAudio.
 * Represents an audio file to be treated as music to be sent.
 *
 * @property string           $type        Type of the result, must be audio.
 * @property string           $media       File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
 * @property InputFile|string $thumb       (Optional). Thumbnail of the file sent. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail‘s width and height should not exceed 90. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can’t be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>
 * @property string           $caption     (Optional). Caption of the audio to be sent, 0-200 characters
 * @property string           $parseMode   (Optional). Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @property int              $duration    (Optional). Duration of the audio in seconds
 * @property string           $performer   (Optional). Performer of the audio
 * @property string           $title       (Optional). Title of the audio
 */
class InputMediaAudio extends InputMedia
{
    /**
     * {@inheritdoc}
     */
    public function relations()
    {
        return array(
            'thumb' => InputFile::class
        );
    }
}
