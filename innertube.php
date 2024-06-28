<?php
include "request.php";
class Innertube
{
    // YouTube on TV client secrets
    protected $_client_id = '861556708454-d6dlm3lh05idd8npek18k6be8ba3oc68.apps.googleusercontent.com';
    protected $_client_secret = 'SboVhoG9s0rNafixCSGGKXAT';
    // Extracted API keys -- unclear what these are linked to.
    protected $_api_keys = [
        'AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8',
        'AIzaSyCtkvNIR1HCEwzsqK6JuE6KqpyjusIRI30',
        'AIzaSyA8eiZmM1FaDVjRy-df2KTyQ_vz_yYM39w',
        'AIzaSyC8UYZpvA2eknNex0Pjid0_eTLJoDu6los',
        'AIzaSyCjc_pVEDi4qsv5MtC2dMXzpIaDoRFLsxw',
        'AIzaSyDHQ9ipnphqTzDqZsbtd8_Ru4_kiKVQe2k'
    ];
    protected $_default_clients = '{
    "WEB": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "WEB",
                    "clientVersion": "2.20200720.00.02"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    },
    "ANDROID": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "ANDROID",
                    "clientVersion": "19.08.35",
                    "androidSdkVersion": 30
                }
            },
            "params": "CgIIAdgDAQ%3D%3D"
        },
        "header": {
            "User-Agent": "com.google.android.youtube/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "IOS": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "IOS",
                    "clientVersion": "19.08.35",
                    "deviceModel": "iPhone14,3"
                }
            }
        },
        "header": {
            "User-Agent": "com.google.ios.youtube/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },

    "WEB_EMBED": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "WEB_EMBEDDED_PLAYER",
                    "clientVersion": "2.20210721.00.00",
                    "clientScreen": "EMBED"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    },
    "ANDROID_EMBED": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "ANDROID_EMBEDDED_PLAYER",
                    "clientVersion": "19.08.35",
                    "clientScreen": "EMBED",
                    "androidSdkVersion": 30
                }
            }
        },
        "header": {
            "User-Agent": "com.google.android.youtube/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "IOS_EMBED": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "IOS_MESSAGES_EXTENSION",
                    "clientVersion": "19.08.35",
                    "deviceModel": "iPhone14,3"
                }
            }
        },
        "header": {
            "User-Agent": "com.google.ios.youtube/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },

    "WEB_MUSIC": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "WEB_REMIX",
                    "clientVersion": "1.20220727.01.00"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    },
    "ANDROID_MUSIC": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "ANDROID_MUSIC",
                    "clientVersion": "6.40.52",
                    "androidSdkVersion": 30
                }
            }
        },
        "header": {
            "User-Agent": "com.google.android.apps.youtube.music/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "IOS_MUSIC": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "IOS_MUSIC",
                    "clientVersion": "6.41",
                    "deviceModel": "iPhone14,3"
                }
            }
        },
        "header": {
            "User-Agent": "com.google.ios.youtubemusic/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },

    "WEB_CREATOR": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "WEB_CREATOR",
                    "clientVersion": "1.20220726.00.00"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    },
    "ANDROID_CREATOR": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "ANDROID_CREATOR",
                    "clientVersion": "22.30.100",
                    "androidSdkVersion": 30
                }
            }
        },
        "header": {
            "User-Agent": "com.google.android.apps.youtube.creator/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "IOS_CREATOR": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "IOS_CREATOR",
                    "clientVersion": "22.33.101",
                    "deviceModel": "iPhone14,3"
                }
            }
        },
        "header": {
            "User-Agent": "com.google.ios.ytcreator/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "ANDROID_TESTSUITE": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "ANDROID_TESTSUITE",
                    "clientVersion": "1.9",
                    "androidSdkVersion": 30
                }
            }
        },
        "header": {
            "User-Agent": "com.google.android.youtube/"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": false
    },
    "MWEB": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "MWEB",
                    "clientVersion": "2.20220801.00.00"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    },

    "TV_EMBED": {
        "innertube_context": {
            "context": {
                "client": {
                    "clientName": "TVHTML5_SIMPLY_EMBEDDED_PLAYER",
                    "clientVersion": "2.0"
                }
            }
        },
        "header": {
            "User-Agent": "Mozilla/5.0"
        },
        "api_key": "AIzaSyAO_FJ2SlqU8Q4STEHLGCilw_Y9_11qcW8",
        "require_js_player": true
    }
}';
    protected $_token_timeout = 1800;
    protected $_cache_dir;
    protected $_token_file;
    protected $innertube_context;
    protected $header;
    protected $api_key;
    protected $require_js_player;
    protected $access_token;
    protected $refresh_token;
    protected $use_oauth;
    protected $allow_cache;
    // Stored as epoch time
    protected $expires = Null;
    function __construct(string $client = 'ANDROID', bool $use_oauth = False, bool $allow_cache = True)
    {
        $this->_default_clients = json_decode($this->_default_clients, true);
        $this->_cache_dir = getcwd() . "__cache__";
        $this->_token_file = $this->_cache_dir . "tokens.json";
        $this->innertube_context = $this->_default_clients[$client]['innertube_context'];
        $this->header = $this->_default_clients[$client]['header'];
        $this->api_key = $this->_default_clients[$client]['api_key'];
        $this->require_js_player = $this->_default_clients[$client]['require_js_player'];
        $this->access_token = Null;
        $this->refresh_token = Null;
        $this->use_oauth = $use_oauth;
        $this->allow_cache = $allow_cache;
        // Try to load from file if specified
        if ($this->use_oauth and $this->allow_cache and file_exists($this->_token_file)) {
            $data = file_get_contents($this->_token_file);
            $this->access_token = $data['access_token'];
            $this->refresh_token = $data['refresh_token'];
            $this->expires = $data['expires'];
            $this->refresh_bearer_token();
        }
    }
    function cache_tokens()
    {
        if (!$this->allow_cache) {
            return;
        }

        $data = '{
            "access_token": "' . $this->access_token . '",
            "refresh_token": "' . $this->refresh_token . '",
            "expires": ' . $this->expires . '
        }';
        if (!file_exists($this->_cache_dir)) {
            mkdir($this->_cache_dir);
        }
        file_put_contents($this->_token_file, $data);
    }
    function refresh_bearer_token($force = False)
    {
        if (!$this->use_oauth) {
            return;
        }
        // Skip refresh if it's not necessary and not forced
        if ($this->expires > microtime(true) and !$force) {
            return;
        }
        // Subtracting 30 seconds is arbitrary to avoid potential time discrepencies
        $start_time = (int) microtime(true) - 30;
        $data = '{
            "client_id": "' . $this->_client_id . '",
            "client_secret": "' . $this->_client_secret . '",
            "grant_type": "refresh_token",
            "refresh_token": "' . $this->refresh_token . '"
        }';
        $response_data = _execute_request(
            'https://oauth2.googleapis.com/token',
            'POST'
            ,
            headers: '{
                "Content-Type": "application/json"
            }',
            data: $data
        );

        $this->access_token = $response_data['access_token'];
        $this->expires = $start_time + $response_data['expires_in'];
        $this->cache_tokens();
    }
    function fetch_bearer_token()
    {
        //Fetch an OAuth token.
        // Subtracting 30 seconds is arbitrary to avoid potential time discrepencies
        $start_time = (int) microtime(true) - 30;
        $data = '{
            "client_id": "' . $this->_client_id . '",
            "scope: "https://www.googleapis.com/auth/youtube"
        }';
        $response_data = _execute_request(
            'https://oauth2.googleapis.com/device/code',
            'POST'
            ,
            headers: '{
                "Content-Type": "application/json"
            }',
            data: $data
        );
        $verification_url = $response_data['verification_url'];
        $user_code = $response_data['user_code'];
        echo "Please open {$verification_url} and input code {$user_code}\n";
        echo 'Press enter when you have completed this step.';
        fgets(STDIN);

        $data = '{
            "client_id": "' . $this->_client_id . '",
            "client_secret": "' . $this->_client_secret . '",
            "device_code": "' . $response_data["device_code"] . '",
            "grant_type": "urn:ietf:params:oauth:grant-type:device_code"
        }';
        $response_data = _execute_request(
            'https://oauth2.googleapis.com/token',
            'POST',
            headers: '{
                "Content-Type": "application/json"
            }',
            data: $data
        );

        $this->access_token = $response_data['access_token'];
        $this->refresh_token = $response_data['refresh_token'];
        $this->expires = $start_time + $response_data['expires_in'];
        $this->cache_tokens();
    }
    function base_url()
    {
        //Return the base url endpoint for the innertube API.
        return 'https://www.youtube.com/youtubei/v1';
    }
    function base_data()
    {
        //Return the base json data to transmit to the innertube API.
        return $this->innertube_context;
    }
    function base_params()
    {
        //Return the base query parameters to transmit to the innertube API.
        return json_decode('{
            "key": "' . $this->api_key . '",
            "contentCheckOk": true,
            "racyCheckOk": true
        }',true);
    }
    function _call_api($endpoint, $query, $data)
    {
        //Make a request to a given endpoint with the provided query parameters and data.
        // Remove the API key if oauth is being used.
        if ($this->use_oauth) {
            unset($query['key']);
        }
        $query = http_build_query($query);
        $endpoint_url = "{$endpoint}?{$query}";
        $headers = json_decode('{
            "Content-Type": "application/json"
        }', true);
        # Add the bearer token if applicable
        if ($this->use_oauth) {
            if ($this->access_token) {
                $this->refresh_bearer_token();
            } else {
                $this->fetch_bearer_token();
            }

            $headers["Authorization"] = "Bearer {$this->access_token}";
        }

        $headers = array_merge($headers, $this->header);
        $headers = json_encode($headers);
        $data = json_encode($data);
        $response_data = _execute_request(
            $endpoint_url,
            'POST',
            headers: $headers,
            data: $data
        );
        return $response_data;
    }
    function player($video_id)
    {
        /*Make a request to the player endpoint.

        :param str video_id:
            The video id to get player info for.
        :rtype: dict
        :returns:
            Raw player info results.
        */
        $endpoint = "{$this->base_url()}/player";
        $query = json_decode('{
            "videoId": "' . $video_id . '"
        }', true);
        $query = array_merge($query, $this->base_params());
        return $this->_call_api($endpoint, $query, $this->base_data());
    }
}