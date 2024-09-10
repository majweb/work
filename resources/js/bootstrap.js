import axios from 'axios';
import * as easepick from '@easepick/bundle';
window.axios = axios;
window.easepick = easepick;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
