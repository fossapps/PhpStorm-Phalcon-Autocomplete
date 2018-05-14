const fetch = require("node-fetch");
const plugin = "fossapps/PhpStorm-Phalcon-Autocomplete";
const stubs = "phalcon/ide-stubs";
const url = "https://api.github.com/repos";
interface IReleaseInfo {
    id: string;
    url: string;
    tag_name: string;
}

const getLatestReleaseId = (baseUrl: string, repo: string): Promise<IReleaseInfo> => {
    const url = `${baseUrl}/${repo}/releases`;
    return fetch(url).then((res: any) => res.json()).then((res: IReleaseInfo[]) => {
        return {
            id: res[0].id,
            url: res[0].url,
            tag_name: res[0].tag_name
        }
    }).catch((e: any) => {console.error(e); return;});
};
const pluginData = getLatestReleaseId(url, plugin);
const stubsData = getLatestReleaseId(url, stubs);
Promise.all([pluginData, stubsData]).then((results: IReleaseInfo[]) => {
    const plugin = results[0];
    const stubs = results[1];
    performRelease(plugin, stubs)
}).catch((e: any) => {console.error(e)});

const performRelease = (plugin: IReleaseInfo, stubs: IReleaseInfo): void => {
    // if (plugin.tag_name === stubs.tag_name) {
    //     console.log(stubs.tag_name);
    // }
    console.log(stubs.tag_name);
    // console.log(`Clone IDE stubs inside /tmp/`);
    // console.log(`Move IDE stubs into plugins`);
    // console.log(`generate JAR`);
    // console.log(`UPDATE plugin.xml`);
    // console.log(`Commit`);
    // console.log(`Tag`);
    // console.log(`push`);
    // console.log(`create release`);
    // console.log(`create issue in jet brains repo`);

};

