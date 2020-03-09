export default class Layout
{
    constructor() {
        this.listeners();
    }

    private listeners(): void {
        console.log('Hello I`m Layout');
    }
    //
    // public isLgDevice (): boolean {
    //     return ($('#isDevice-lg:visible').length > 0);
    // }
    //
    // public isMdDevice (): boolean {
    //     return ($('#isDevice-md:visible').length > 0);
    // }
    //
    // public isSmDevice (): boolean {
    //     return ($('#isDevice-sm:visible').length > 0);
    // }
    //
    // public isXsDevice (): boolean {
    //     return ($('#isDevice-xs:visible').length > 0);
    // }
}