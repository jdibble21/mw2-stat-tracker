from cod_api import API, platforms

import asyncio
api = API()
sso_key = "MTUyMjk2MjgwMjQ1Njg5MjE5Nzk6MTY3Mjk1MjU0NzExMDoyMjYxMjY5ZTUyZmJiNGFlZDAxNGFlN2JiNDg1MTAwNw"


async def getCombatHistory():
    # login in with sso token
    await api.loginAsync(sso_key)
    # retrieving combat history
    hist = await api.ModernWarfare2.combatHistory(platforms.XBOX, "TarsalSnip3r") # returns data of type dict
    print(hist)

if __name__ == "__main__":
    loop = asyncio.get_event_loop()
    loop.run_until_complete(getCombatHistory())